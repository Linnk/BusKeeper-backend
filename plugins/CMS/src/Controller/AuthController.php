<?php
/**
 * Auth (Controller) : Controller to manage users access
 *
 *
 * @copyright     Pewpew (2015)
 * @link          http://pewpew.mx Pewpew (2015)
 */
namespace CMS\Controller;

use CMS\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Static content controller
 *
 * This controller contain the login/logout and some other user's functions
 *
 */
class AuthController extends AppController
{
    /**
     * Login view
     *
     * @return A simple view from pages to load the login form element
     * 
     * In the case of having data in the request, will attempt to login an user. 
     * If successful will redirect to auth redirect action.
     */
    public function index() {
	    $this->redirect(['action' => 'user_edit']);
    }
    public function login()
    {
	    if($this->json) {
		    if($token = $this->ApiTokens->accessToken($this->request)) {
				$this->serialize['message'] = $token;
				$this->serialize['error'] = "";   
		    } else {
				$this->serialize['message'] = null;
				$this->serialize['code'] = 403;
				$this->serialize['error'] = __('Credentials are incorrect');
				$this->Flash->danger(__('Username or password is incorrect'));
				$this->set($this->serialize);
			    $this->set('_serialize', array_keys($this->serialize));
			    $this->json = false;
		    }
		} else {
			if ($this->request->is('post')) {
		        $user = $this->Auth->identify();
		        if ($user) {
		            $this->Auth->setUser($user);
		            return $this->redirect($this->Auth->redirectUrl("/cms"));
		        } else {
		        	//pr((new DefaultPasswordHasher)->hash($this->request->data['password']));
		            $this->Flash->danger(__('Username or password is incorrect'));
		        }
		    }
	        if($this->Auth->user('id')) {
				return $this->redirect($this->Auth->logout());
	        }	
		}
    }
    /**
     * Logout action
     *
     * @return a redirection set in auth config
     * 
     * This doesn't render anything just logout the user in session if there is one
     * and redirect regardless of the session
     */
    public function logout()
	{
	    return $this->redirect($this->Auth->logout());
	}
	
	public function userEdit() {
		
		$entity = $this->Users->find()->where([
			'Users.id' => $this->Auth->user('id'),
			'Users.active' => 1
		])->first();
		
		if($this->request->is('put')) {

			$this->Users->patchEntity($entity, $this->request->data());
			
			if ($this->Users->save($entity)) {
				$this->Flash->success(translate('The data was saved'));
				$this->redirect(['controller'=>$this->request->params['controller'], 'action'=>'user_edit']);
			} else {
			    // Entity failed validation.
				$this->Flash->danger('There is validation errors.');
			}
		} else {
			foreach($this->request->query as $field => $value) {
				$entity->$field = $value;
			}
		}
		$fields = [];
		$modelFields = $this->Users->schema()->typeMap();
		$modelFields = array_diff(array_keys($modelFields), ['id','sid','user_type_id','username','email','active','created','modified']);

		foreach($modelFields as $field) {
			$fields[$field] = $this->Users->schema()->column($field);
		}
		$fields['password']['type'] = 'password';
		$this->set('fields'	, $fields);
		$this->set('alias'	, $this->Users->alias());
		$this->set('entity', $entity);
	}
	public function register() {
		if($this->json) {
			$data = $this->request->data();
			$Devices = TableRegistry::get("Devices");
			if($entity = $Devices->find()->where(["device_token LIKE" => $data['deviceToken']])->first()) {
				$this->serialize['code'] = 200;
				$this->serialize['message'] = "User's Devices is registred";
			} else {
				$this->serialize['code'] = 204;
				$this->serialize['error'] = "User's Devices is NOT registred yet";
			}
			$this->set($this->serialize);
		    $this->set('_serialize', array_keys($this->serialize));
		    $this->json = false;
		} else {
			
		}
	}
    /**
     * Auth setting
     *
     * @return a redirection set in auth config
     * 
     * This doesn't render anything just logout the user in session if there is one
     * and redirect regardless of the session
     */
    public function beforeFilter(Event $event)
    {
	    parent::beforeFilter($event);
		
		// Allow only the view and index actions.
		$this->Auth->allow(['login', 'logout', 'register']);
    }
	public function isAuthorized($user = null) {
		return true;
	}
}
