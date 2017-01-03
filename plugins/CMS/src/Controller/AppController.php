<?php

namespace CMS\Controller;

use Cake\Controller\Controller;
use Cake\Routing\Router;
use Cake\Event\Event;
use Cake\I18n\I18n;
use Cake\Log\Log;


class AppController extends Controller
{
	public $serialize =  true;
	public $json = false;
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('CMS.Users');
        $this->loadModel('CMS.ApiTokens');
        $this->loadComponent('Flash');
        $this->loadComponent('Cookie');
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Auth', [	        
            'authorize' => ['Controller'],
            'loginAction' => [
            	'controller' => 'Auth',
            	'action' => 'login'
            ],
            'authError' => 'You need to login first',
            'authenticate' => [
	            'Form' => [
		            'userModel' => 'CMS.Users',
	                'fields' => [
	                	'username' => 'username',
	                	'password' => 'password'
	                ],
	                'scope' => ['active' => 1]
	            ]
	        ],
	        'flash' => [
		        'element' => 'danger',
		        'key' => 'auth_admin',
		        'params' => [
		            'class' => 'danger'
		        ]
		    ],
		    'storage' => [
		    	'className' => 'Session',
		    	'key' => 'Auth.Admin'
		    ]
        ]);
        $this->serialize = [	        
			'url' => $this->request->here,
			'code' => 403,
			'message' => null,
			'encrypted' => false,
			'error' => ''
        ];
        $this->Cookie->configKey('timezone', 'encryption', false);
		if($timezone = $this->Cookie->read('timezone')) {
			date_default_timezone_set($timezone);
		}
    }
    public function beforeFilter(Event $event)
    {
	    parent::beforeFilter($event);
	    
		$allow_web_token = $this->ApiTokens->webToken($this->request->query);
		$isJson = $this->request->isJson();
		$this->json = $isJson || $allow_web_token;
		
		if($this->json) {
			$user = null;
			$error = null;
			
			if($this->ApiTokens->identify($this->request, $user, $error)) {
				$this->response->header([
				    'Accepts' => 'application/json',
				    'Content-Type' => 'application/json'
				]);
				$this->Auth->setUser($user);
				$this->set($this->serialize);
			} else if($error) {

				$this->Flash->danger($error);
				$this->serialize['error'] = $error;
				$this->Auth->config(['authError'=>$error]);
				$this->serialize['code'] = 401;
			}
	    }
	    $session = $this->request->session();
	    
	    if($this->Auth->user('id')>0) {
//		    $this->Auth->config('authError', false);
			$this->Users->user_type_limitation = $this->Auth->user('user_type_id');
			$role = $this->Users->getRole($this->Auth->user('id'));
			$session->write('Auth.Admin.Role', $role['Role']);
			$this->serialize['code'] = 404;
	    } else {
		    $session->destroy('Auth.Admin');
	    }
	    $this->set('Auth', $session->read('Auth'));
    }
    
    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function redirect($route, $status = 302) {
	    parent::redirect($route, $status);
    }
    public function beforeRender(Event $event)
    {
	    if($this->json) {
		    $this->Auth->logout();
		    $this->request->session()->destroy('Auth');
		    $this->serialize['code'] = 200;
		    $this->set($this->serialize);
		    $this->set('_serialize', array_keys($this->serialize));
	    }
    }
}
