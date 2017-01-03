<?php
/**
 * Auth (Controller) : Controller to manage users access
 *
 *
 * @copyright     Pewpew (2015)
 * @link          http://pewpew.mx Pewpew (2015)
 */
namespace App\Controller;

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
    public function login()
    {
	    if($this->request->is('post')) {
	        $user = $this->Auth->identify();
	        if ($user) {
		        $this->Auth->setUser($user);
	            if($redirect_to = $this->request->query('redirect_to')) {
		        	return $this->redirect($redirect_to);
	            }
	            return $this->redirect("/cuenta");
	        } else {
	        	//pr((new DefaultPasswordHasher)->hash($this->request->data('password')));exit;
	            $this->Flash->danger(translate('Email or password is incorrect'));
	        }
	    }
        if($this->Auth->user('id')) {
			return $this->redirect("/cuenta");
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
	
	public function register() {
		if($this->Auth->user('id')) {
			return $this->redirect("/cuenta");
        }
        
		$user = $this->Users->newEntity();
		
		if($this->request->is('post')) {
			
            $user = $this->Usuarios->patchEntity($user, $this->request->data());
            
			if ($this->Users->save($user)) {
				$this->Auth->setUser($user->toArray());
				$this->Flash->success('Bienvenido!');
				$this->redirect("/cuenta");
			} else {
			    // Entity failed validation.
				$this->Flash->danger(translate('There is validation errors.'));
			}
		}
		$this->set('user', $user);
	}
	public function beforeFilter(Event $event) {
		parent::beforeFilter($event);
		$this->Auth->allow(['login','logout','register']);
	}
	public function isAuthorized($user = null) {
		return true;
	}
}
