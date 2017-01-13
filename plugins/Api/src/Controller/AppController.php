<?php

namespace Api\Controller;

use Cake\Controller\Controller;
use Cake\Routing\Router;
use Cake\Event\Event;
use Cake\I18n\I18n;
use Cake\Log\Log;

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
        
        $this->loadComponent('Cookie');

        $this->Cookie->configKey('timezone', 'encryption', false);
		if($timezone = $this->Cookie->read('timezone')) {
			date_default_timezone_set($timezone);
		}
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
    public function redirect($route, $status = 302) {
	    parent::redirect($route, $status);
    }
    public function beforeRender(Event $event)
    {
	    
    }
}
