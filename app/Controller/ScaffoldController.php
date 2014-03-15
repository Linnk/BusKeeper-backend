<?php
/**
 * Scaffold.
 *
 * Automatic forms and actions generation for rapid web application development.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Controller
 * @since         Cake v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Scaffold', 'View');

/**
 * Scaffolding is a set of automatic actions for starting web development work faster.
 *
 * Scaffold inspects your database tables, and making educated guesses, sets up a
 * number of pages for each of your Models. These pages have data forms that work,
 * and afford the web developer an early look at the data, and the possibility to over-ride
 * scaffolded actions with custom-made ones.
 *
 * @package       Cake.Controller
 */
class ScaffoldController extends AppController
{
	public $helpers = array();
/**
 * Path to View.
 *
 * @var string
 */
	public $viewPath;

/**
 * Name of layout to use with this View.
 *
 * @var string
 */
	public $layout = 'default';

/**
 * Valid session.
 *
 * @var boolean
 */
	protected $_validSession = null;

/**
 * List of variables to collect from the associated controller
 *
 * @var array
 */
	protected $_passedVars = array(
		'layout', 'name', 'viewPath', 'request'
	);

/**
 * Title HTML element for current scaffolded view
 *
 * @var string
 */
	public $scaffoldTitle = null;

/**
 * Construct and set up given controller with given parameters.
 *
 * @param Controller $controller Controller to scaffold
 * @param CakeRequest $request Request parameters.
 * @throws MissingModelException
 */
	public function __construct($request = null, $response = null)
	{
		parent::__construct($request, $response);

/*		$count = count($this->_passedVars);
		for ($j = 0; $j < $count; $j++) {
			$var = $this->_passedVars[$j];
			$this->{$var} = $controller->{$var};
		}
*/
		$this->constructClasses();
		$this->redirect = array('action' => 'index');

		if (!is_object($this->{$this->modelClass})) {
			throw new MissingModelException($this->modelClass);
		}

		$this->ScaffoldModel = $this->{$this->modelClass};
		$this->scaffoldTitle = Inflector::humanize(Inflector::underscore($this->viewPath));
		$this->scaffoldActions = array('index', 'list', 'view', 'add', 'create', 'edit', 'update', 'delete');
		$request_action = Inflector::humanize($this->request->action);
		$title = ($request_action === 'Index') ? __($this->scaffoldTitle) : __($this->scaffoldTitle).': '.__($request_action);
		$modelClass = $this->modelClass;
		$primaryKey = $this->ScaffoldModel->primaryKey;
		$displayField = $this->ScaffoldModel->displayField;
		$singularVar = Inflector::variable($modelClass);
		$pluralVar = Inflector::variable($this->name);
		$singularHumanName = Inflector::humanize(Inflector::underscore($modelClass));
		$pluralHumanName = Inflector::humanize(Inflector::underscore($this->name));
		$schemaFields = $this->ScaffoldModel->schema();
		$scaffoldFields = array_keys($schemaFields);
		$associations = $this->_associations();

		$this->set(compact(
			'title_for_layout', 'modelClass', 'primaryKey', 'displayField', 'singularVar', 'pluralVar',
			'singularHumanName', 'pluralHumanName', 'schemaFields', 'scaffoldFields', 'associations'
		));
		$this->set('title_for_layout', $title);

		$this->_validSession = (
			isset($this->Session) && $this->Session->valid() != false
		);
		$this->_scaffold($request);
	}

/**
 * Renders a view action of scaffolded model.
 *
 * @param CakeRequest $request Request Object for scaffolding
 * @return mixed A rendered view of a row from Models database table
 * @throws NotFoundException
 */
	protected function _scaffoldView(CakeRequest $request) {
		$this->viewClass = 'Scaffold';
		if ($this->beforeScaffold('view')) {
			if (isset($request->params['pass'][0])) {
				$this->ScaffoldModel->id = $request->params['pass'][0];
			}
			if (!$this->ScaffoldModel->exists()) {
				throw new NotFoundException(__d('cake', 'Invalid %s', Inflector::humanize($this->modelKey)));
			}
			$this->ScaffoldModel->recursive = 1;
			$this->request->data = $this->ScaffoldModel->read();
			$this->set(
				Inflector::variable($this->modelClass), $this->request->data
			);
			$this->render($this->request['action'], $this->layout);
		} elseif ($this->scaffoldError('view') === false) {
			return $this->_scaffoldError();
		}
	}

/**
 * Renders index action of scaffolded model.
 *
 * @param array $params Parameters for scaffolding
 * @return mixed A rendered view listing rows from Models database table
 */
	protected function _scaffoldIndex($params) {
		$this->viewClass = 'Scaffold';
		if ($this->beforeScaffold('index')) {
			$schemaFields = $this->ScaffoldModel->schema();
			$scaffoldFields = array_keys($schemaFields);
			if(isset($this->ScaffoldModel->scaffoldFieldsPrivateControl))
				$scaffoldFields = array_diff($scaffoldFields, $this->ScaffoldModel->scaffoldFieldsPrivateControl);
			if(isset($this->ScaffoldModel->scaffoldFieldsForIndex)) {
				$scaffoldFields = array_intersect($scaffoldFields, $this->ScaffoldModel->scaffoldFieldsForIndex);
				$scaffoldFields = array_intersect($this->ScaffoldModel->scaffoldFieldsForIndex, $scaffoldFields);
			}
			$this->set('scaffoldFields', $scaffoldFields);
			$this->ScaffoldModel->recursive = 0;
			$this->set(
				Inflector::variable($this->name), $this->paginate($this->modelClass)
			);
			$this->render($this->request['action'], $this->layout);
		} elseif ($this->scaffoldError('index') === false) {
			return $this->_scaffoldError();
		}
	}
/**
 * Renders an add or edit action for scaffolded model.
 *
 * @param string $action Action (add or edit)
 * @return mixed A rendered view with a form to edit or add a record in the Models database table
 */
	protected function _scaffoldForm($action = 'edit') {
		$this->viewClass = 'Scaffold';
		$scaffoldFieldsNotForForm = array('created','modified','updated');
		if(isset($this->ScaffoldModel->scaffoldFieldsNotForForm))
			$scaffoldFieldsNotForForm = array_merge($scaffoldFieldsNotForForm, $this->ScaffoldModel->scaffoldFieldsNotForForm);
		if(isset($this->ScaffoldModel->scaffoldFieldsPrivateControl))
			$scaffoldFieldsNotForForm = array_merge($scaffoldFieldsNotForForm, $this->ScaffoldModel->scaffoldFieldsPrivateControl);
		
		$schemaFields = $this->ScaffoldModel->schema();
		$scaffoldFields = array_keys($schemaFields);

		foreach($schemaFields as $field => $schemaField) {
			$schemaFields[$field] = array();
			$schemaFields[$field]['class'] = $schemaField['type'].' span4';
			if($schemaField['type']=='binary')
				$schemaFields[$field]['type'] = 'file';
			elseif($schemaField['type']=='datetime')
				$schemaFields[$field]['type'] = 'text';
		}
		$associations = $this->_associations();
		if(isset($associations['hasAndBelongsToMany']))
			foreach($associations['hasAndBelongsToMany'] as $assocModelName => $assocModel)
				$schemaFields[$assocModelName] = array('class' => 'hasAndBelongsToMany span4');
		
		$this->set('schemaFields', $schemaFields);
		$this->set('scaffoldFieldsNotForForm', $scaffoldFieldsNotForForm);
		$this->viewVars['scaffoldFields'] = array_merge(
			$this->viewVars['scaffoldFields'],
			array_keys($this->ScaffoldModel->hasAndBelongsToMany)
		);
		$this->render($action, $this->layout);
	}

/**
 * Saves or updates the scaffolded model.
 *
 * @param CakeRequest $request Request Object for scaffolding
 * @param string $action add or edit
 * @return mixed Success on save/update, add/edit form if data is empty or error if save or update fails
 * @throws NotFoundException
 */
	protected function _scaffoldSave(CakeRequest $request, $action = 'edit') {
		$formAction = 'edit';
		$success = __d('cake', 'updated');
		if ($action === 'add') {
			$formAction = 'add';
			$success = __d('cake', 'saved');
		}

		if ($this->beforeScaffold($action)) {
			if ($action == 'edit') {
				if (isset($request->params['pass'][0])) {
					$this->ScaffoldModel->id = $request['pass'][0];
				}
				if (!$this->ScaffoldModel->exists()) {
					throw new NotFoundException(__d('cake', 'Invalid %s', Inflector::humanize($this->modelKey)));
				}
			}

			if (!empty($request->data)) {
				if ($action == 'create' || $action == 'add') {
					$this->ScaffoldModel->create();
				}

				if ($this->ScaffoldModel->save($request->data)) {
					if ($this->afterScaffoldSave($action)) {
						$message = __d('cake',
							'The %1$s has been %2$s',
							Inflector::humanize($this->modelKey),
							$success
						);
						return $this->_sendMessage($message);
					} else {
						return $this->afterScaffoldSaveError($action);
					}
				} else {
					if ($this->_validSession) {
						$this->Session->setFlash(__d('cake', 'Please correct errors below.'), 'alert-error');
					}
				}
			}

			if (empty($request->data)) {
				if ($this->ScaffoldModel->id) {
					$this->data = $request->data = $this->ScaffoldModel->read();
				} else {
					$this->data = $request->data = $this->ScaffoldModel->create();
				}
			}

			foreach ($this->ScaffoldModel->belongsTo as $assocName => $assocData) {
				$varName = Inflector::variable(Inflector::pluralize(
					preg_replace('/(?:_id)$/', '', $assocData['foreignKey'])
				));
				$this->set($varName, $this->ScaffoldModel->{$assocName}->find('list'));
			}
			foreach ($this->ScaffoldModel->hasAndBelongsToMany as $assocName => $assocData) {
				$varName = Inflector::variable(Inflector::pluralize($assocName));
				$this->set($varName, $this->ScaffoldModel->{$assocName}->find('list'));
			}

			return $this->_scaffoldForm($formAction);
		} elseif ($this->scaffoldError($action) === false) {
			return $this->_scaffoldError();
		}
	}

/**
 * Performs a delete on given scaffolded Model.
 *
 * @param CakeRequest $request Request for scaffolding
 * @return mixed Success on delete, error if delete fails
 * @throws MethodNotAllowedException When HTTP method is not a DELETE
 * @throws NotFoundException When id being deleted does not exist.
 */
	protected function _scaffoldDelete(CakeRequest $request) {
		if ($this->beforeScaffold('delete')) {
			if (!$request->is('post')) {
				throw new MethodNotAllowedException();
			}
			$id = false;
			if (isset($request->params['pass'][0])) {
				$id = $request->params['pass'][0];
			}
			$this->ScaffoldModel->id = $id;
			if (!$this->ScaffoldModel->exists()) {
				throw new NotFoundException(__d('cake', 'Invalid %s', Inflector::humanize($this->modelClass)));
			}
			if ($this->ScaffoldModel->delete()) {
				$message = __d('cake', 'The %1$s with id: %2$s has been deleted.', Inflector::humanize($this->modelClass), $id);
				return $this->_sendMessage($message);
			} else {
				$message = __d('cake',
					'There was an error deleting the %1$s with id: %2$s',
					Inflector::humanize($this->modelClass),
					$id
				);
				return $this->_sendMessage($message);
			}
		} elseif ($this->scaffoldError('delete') === false) {
			return $this->_scaffoldError();
		}
	}

/**
 * Sends a message to the user.  Either uses Sessions or flash messages depending
 * on the availability of a session
 *
 * @param string $message Message to display
 * @return void
 */
	protected function _sendMessage($message) {
		if ($this->_validSession) {
			$this->Session->setFlash($message, 'alert-success');
			if(isset($this->data['submit']) && $this->data['submit']=='save_view')
			{
				$this->redirect(array('action' => 'view', $this->ScaffoldModel->id ));
				pr($this->data);exit;
			}
			$this->redirect($this->redirect);
		} else {
			$this->flash($message, $this->redirect);
		}
	}

/**
 * Show a scaffold error
 *
 * @return mixed A rendered view showing the error
 */
	protected function _scaffoldError() {
		return $this->render('error', $this->layout);
	}

/**
 * When methods are now present in a controller
 * scaffoldView is used to call default Scaffold methods if:
 * `public $scaffold;` is placed in the controller's class definition.
 *
 * @param CakeRequest $request Request object for scaffolding
 * @return mixed A rendered view of scaffold action, or showing the error
 * @throws MissingActionException When methods are not scaffolded.
 * @throws MissingDatabaseException When the database connection is undefined.
 */
	protected function _scaffold(CakeRequest $request) {
		$db = ConnectionManager::getDataSource($this->ScaffoldModel->useDbConfig);
		$prefixes = Configure::read('Routing.prefixes');
		$scaffoldPrefix = $this->scaffoldActions;

		if (isset($db)) {
			if (empty($this->scaffoldActions)) {
				$this->scaffoldActions = array(
					'index', 'list', 'view', 'add', 'create', 'edit', 'update', 'delete'
				);
			} elseif (!empty($prefixes) && in_array($scaffoldPrefix, $prefixes)) {
				$this->scaffoldActions = array(
					$scaffoldPrefix . '_index',
					$scaffoldPrefix . '_list',
					$scaffoldPrefix . '_view',
					$scaffoldPrefix . '_add',
					$scaffoldPrefix . '_create',
					$scaffoldPrefix . '_edit',
					$scaffoldPrefix . '_update',
					$scaffoldPrefix . '_delete'
				);
			}

			if (!empty($prefixes)) {
				$request->params['action'] = str_replace($scaffoldPrefix . '_', '', $request->params['action']);
			}
			switch ($request->params['action']) {
				case 'list':
					$this->_scaffoldIndex($request);
				break;
			}

		} else {
			throw new MissingDatabaseException(array('connection' => $this->ScaffoldModel->useDbConfig));
		}
	}

/**
 * Returns associations for controllers models.
 *
 * @return array Associations for model
 */
	protected function _associations() {
		$keys = array('belongsTo', 'hasOne', 'hasMany', 'hasAndBelongsToMany');
		$associations = array();

		foreach ($keys as $key => $type) {
			foreach ($this->ScaffoldModel->{$type} as $assocKey => $assocData) {
				$associations[$type][$assocKey]['primaryKey'] =
					$this->ScaffoldModel->{$assocKey}->primaryKey;

				$associations[$type][$assocKey]['displayField'] =
					$this->ScaffoldModel->{$assocKey}->displayField;

				$associations[$type][$assocKey]['foreignKey'] =
					$assocData['foreignKey'];

				$associations[$type][$assocKey]['controller'] =
					Inflector::pluralize(Inflector::underscore($assocData['className']));

				if ($type == 'hasAndBelongsToMany') {
					$associations[$type][$assocKey]['with'] = $assocData['with'];
				}
			}
		}
		return $associations;
	}
/**
 * Export to CVS
 */
 	function export_cvs()
	{
		$scaffoldFields = array_keys($this->ScaffoldModel->schema());

		if(isset($this->ScaffoldModel->scaffoldFieldsPrivateControl))
			$scaffoldFields = array_diff($scaffoldFields, $this->ScaffoldModel->scaffoldFieldsPrivateControl);

		$this->{$this->modelClass}->recursive = -1;
		
		$elements = $this->{$this->modelClass}->find('all', array('fields' => $scaffoldFields));
		
		header('Content-type: text/cvs');
		header('Content-Disposition: attachment; filename="hc-'.strtolower(__($this->name,true)).'.cvs"');
		
		echo implode(',', array_keys($scaffoldFields))."\n";			
		
		foreach($elements as $element)
		{
			echo implode(',',$element[$this->modelClass])."\n";
		}
		exit;
	}
/**
 * Override this method for customization.
 */
	public function index()
	{
		$this->_scaffoldIndex($this->request);
	}
	public function view()
	{
		$this->_scaffoldView($this->request);
	}
	public function add()
	{
		$this->ScaffoldModel->id = null;
		$this->_scaffoldSave($this->request, 'add');
	}
	public function create()
	{
		$this->_scaffoldSave($this->request, 'create');
	}
	public function edit()
	{
		$this->_scaffoldSave($this->request, 'edit');
	}
	public function update()
	{
		$this->_scaffoldSave($this->request, 'edit');
	}
	public function delete()
	{
		$this->_scaffoldDelete($this->request);
	}
}
