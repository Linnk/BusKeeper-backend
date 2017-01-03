<?php
/**
 *
 * Auth (Controller) : Controller to manage users access
 *
 * "A"utomatic "O"bject "A"ctions generation for rapid cms application development.
 *
 *
 * @copyright     Pewpew (2015)
 * @link          http://pewpew.mx Pewpew (2015)
 */
 
namespace CMS\Controller;

use CMS\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\Event\Event;
 
class AoaController extends AppController {
	
	/**
	 * Array of the automatic actions for the object's controller
	 *
	 * @var array
	 */
	public $actions = array(
		'index' => 'list',
		'view' => 'view',
		'add' => 'form',
		'edit' => 'form',
		'delete' => null
	);
	public $action = null;
	/**
	 * Main Controller's Object Model and Controller reference
	 */
	public $model = null;
	public $modelPrefix = "";
	/**
	 * Main Controller's Object Model conditions
	 */
	public $where = [];
	/**
	 * Main Controller's Object Model relationshipts on results
	 */
	public $contains = [];
	/**
	 * Main Controller's Object Paginator
	 */
	public $paginate = [
        'limit' => 24,
        'maxLimit' => 1000000
    ];
	
	public $components = array('Paginator');
	/**
	 * DEFAULT FUNCTIONS
	 */
	public $templateDir = "/plugins/CMS";
	 
    public function initialize()
    {
	    parent::initialize();
	    foreach($this->components as $component) {
		    $this->loadComponent($component);
	    }
	    $this->action = $this->request->params['action'];
		$this->model = $this->model ? $this->model : $this->request->params['controller'];
		$this->model = TableRegistry::get($this->modelPrefix.$this->model);
    }
	public function beforeFilter(Event $event){
		parent::beforeFilter($event);
	}
	
	/**
	 * List action for objects
	 */
	public function index(){
		$associations = $this->getModelAssociations();

		// Get the query object for entity description
		$query = $this->model->find('all')->where($this->where);
		$this->serialize['message'] = $this->paginate($query)->toArray();

		// Retrieving the fields description for the model
		$fields = $this->getFieldsForView("list");

		$this->set('fields'	, $fields);
		$this->set('alias'	, $this->model->alias());
		$this->set('results', $this->serialize['message']);
		$this->set('associations', $associations);
	}
	/**
	 * View or Detail action for object
	 */
	public function view($primary){

		$this->serialize['message'] = $entity = $this->model->get($primary);
	
		// Retrieving the fields description for the model
		$fields = $this->getFieldsForView("view");
		
		$this->set('fields'	, $fields);
		$this->set('alias'	, $this->model->alias());
		$this->set('entity', $entity);
		$this->set('associations', $this->getModelAssociations());
	}
	/**
	 * Edit action for object
	 */
	public function edit($primary){

		if($this->request->is('put')) {
			$entity = $this->model->get($primary);
			$this->model->patchEntity($entity, $this->request->data());
			
			if ($this->model->save($entity)) {
				$this->Flash->success(translate('The data was saved'));
				$this->redirect(['controller'=>$this->request->params['controller'], 'action'=>'edit', $primary]);
			} else {
			    // Entity failed validation.
				$this->Flash->danger('There is validation errors.');
			}
		} else {
			$entity = $this->model->get($primary);
			foreach($this->request->query as $field => $value) {
				$entity->$field = $value;
			}
		}
		
		$fields = $this->getFieldsForView("form");

		$this->set('fields'	, $fields);
		$this->set('alias'	, $this->model->alias());
		$this->set('entity', $entity);
		$this->set('associations', $this->getModelAssociations());
	}
	/**
	 * Add action for object
	 */
	public function add(){

		if($this->request->is('post')) {
			$data = $this->request->data();
			unset($data[$this->model->primaryKey()]);
			$entity = $this->model->newEntity($data);
			if ($this->model->save($entity)) {
				$this->Flash->success(translate('The data was saved'));
				$this->redirect(['controller'=>$this->request->params['controller'], 'action'=>'edit', $entity->{$this->model->primaryKey()}]);
			} else {
			    // Entity failed validation.
				$this->Flash->danger('There is validation errors.');
			}
		} else {
			$entity = $this->model->newEntity();
			
			foreach($this->request->query as $field => $value) {
				$entity->$field = $value;
			}
		}
		
		$fields = $this->getFieldsForView("form");

		$this->set('fields'	, $fields);
		$this->set('alias'	, $this->model->alias());
		$this->set('entity', $entity);
		$this->set('associations', $this->getModelAssociations());
	}
	/**
	 * Delete action for object
	 */
	public function delete($primary){
		try {
			$entity = $this->model->get($primary);	
			if($entity) {
				$result = $this->model->delete($entity);	
			}
			if ($result) {
				$this->Flash->success('The data was deleted.');
			}
		} catch (RecordNotFoundException $e) {
			$this->Flash->danger($e->getMessage());
		}
		
		$this->redirect(['controller'=>$this->request->params['controller'], 'action'=>'index']);
	}
	public function getContains() {
		$contains = [];

		foreach($this->model->getAssociations() as $assoc_type => $tables) {
			foreach($tables as $key => $conf) {
				$contains[]=$key;
			}
		}
		return $contains;
	}
	public function getModelAssociations($where=array()) {
		$associations = [
			'belongsTo' => [],
			'hasOne' => [],
			'hasMany' => [],
			'belongsToMany' => []
		];
		$contain = [];
		foreach($this->model->getAssociations() as $assoc_type => $tables) {
			foreach($tables as $key => $conf) {
				$associations[$assoc_type][$conf['foreignKey']] = $conf;
				$table_where = isset($where[$conf['table']]) ? $where[$conf['table']]:[];
				$relationModel = TableRegistry::get($this->modelPrefix.$conf['table']);
				$associations[$assoc_type][$conf['foreignKey']]['results'] = $relationModel->find('list', ['keyField' => $conf['key'],'valueField' => $conf['display']])->where($table_where)->toArray();
				$contain[] = $conf['table'];
			}
		}
		$this->paginate['contain'] = $contain;
		return $associations;
	}
	public function getFieldsForView($view) {
		$modelPrimaryKey = $this->model->primaryKey();
		$modelFields = $this->model->getFields($view);

		if(empty($modelFields)) {
			$modelFields = $this->model->schema()->typeMap();
		}
		if(!(isset($modelFields[$modelPrimaryKey]) OR in_array($modelPrimaryKey, $modelFields))) {
			$modelFields[$modelPrimaryKey] = ['field_type' => 'primary'];
		}
		$fields = [];
		foreach($modelFields as $field => $descriptor) {
			if(is_numeric($field)){
				$field = $descriptor;
				$descriptor = [];
			} else if(!is_array($descriptor)){
				$descriptor = ['type' => $descriptor];
			}

			if(strpos($field, ".")) {
				$field = str_replace($this->model->alias().".", '', $field);
			}
			$descriptor['primaryKey']=$field == $modelPrimaryKey;
			$fields[$field] = $this->model->schema()->column($field);
			$fields[$field]['field_type'] = $fields[$field]['type'];
			unset($fields[$field]['type']);
			$fields[$field] = array_merge($fields[$field], $descriptor);
		}
		return $fields;
	}
	public function beforeRender(Event $event){
		parent::beforeRender($event);

		$this->set('objectActions', $this->model->objectActions());
		$this->set('actions', $this->actions);
		
		$view = $this->action;
		$viewPath = $this->name;
		
		if(!file_exists(ROOT.$this->templateDir.DS.'src'.DS.'Template'.DS.$this->name.DS.$this->action.'.ctp')) {
			$view = $this->actions[$this->action];
			$viewPath = "Aoa";
		}
		$this->viewBuilder()->template($view);
		$this->viewBuilder()->templatePath($viewPath);
	}
	public function isAuthorized($user = null) {
		$authorization = false;

		$role = $this->Users->getRole($this->Auth->user('id'));

		foreach($role['Role']['permissions'] as $permissions_name => $pemissions) {
			$controller = $this->request['controller'] == $pemissions['controller'];
			$actions = array_keys($pemissions['actions']);
			$action = in_array($this->request['action'], $actions) || in_array('*', $actions);
			if($controller && $action) {
				$authorization = true;
			}
		}
		return $authorization;
	}
}