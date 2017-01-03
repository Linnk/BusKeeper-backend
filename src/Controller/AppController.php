<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\I18n;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

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
		
        $this->loadModel('Users');
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Cookie');
        $this->loadComponent('Auth', [	        
            'authorize' => ['Controller'],
            'loginAction' => [
            	'controller' => 'Auth',
            	'action' => 'login'
            ],
            'authError' => 'You need to login first',
            'authenticate' => [
	            'Form' => [
		            'userModel' => 'Users',
	                'fields' => [
	                	'username' => 'email',
	                	'password' => 'password'
	                ],
	                'scope' => ['active' => 1]
	            ]
	        ],
	        'flash' => [
		        'element' => 'danger',
		        'key' => 'auth_user',
		        'params' => [
		            'class' => 'danger'
		        ]
		    ],
		    'storage' => [
		    	'className' => 'Session',
		    	'key' => 'Auth.User'
		    ]
        ]);
    }
	public function beforeFilter(Event $event)
    {
	    parent::beforeFilter($event);

	}
    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
        if($user_id = $this->Auth->user('id')) {
	        $this->set('Auth', $this->Users->find()->where(['id' => $this->Auth->user('id')])->first()->toArray());
        } else {
	        $this->set('Auth', null);
        }
        
    }
}