<?php
/**
 * Projects (Controller) : Controller for aoa
 *
 *
 * @copyright     Pewpew (2016)
 * @link          http://pewpew.mx Pewpew (2016)
 */
 
namespace CMS\Controller;

use Cake\Event\Event;
use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\Routing\Router;
use Cake\ORM\TableRegistry;

class ApiController extends AoaController
{	
	public $where = [];
	public $where_prefix = "_w_";
	public $options = [
		'no_assoc' => 0,
		'limit' => 100000
	];
	
	public function beforeFilter(Event $event){
		parent::beforeFilter($event);
		
		foreach($this->request->data as $key => $data) {
			if(!is_array($data)) {
				$this->request->query[$key] = $data;
			}
		}
		foreach($this->request->query as $key => $data) {
			if(strpos($key, $this->where_prefix)===0) {
				$this->where[$this->model->alias().".".substr($key, strlen($this->where_prefix))] = $data;
			}
		}

		$this->options = array_merge($this->options, $this->request->query);
		if($this->options['no_assoc']==1) {
			$this->model->associations = [];
		}
		if($this->request->isJson()) {
			$this->request->query['limit'] = $this->options['limit'];
		}
	}
	public function successFlash($message) {
		$this->Flash->success($message);
		$this->serialize['message'] = $message;
	}
	public function dangerFlash($message) {
		$this->Flash->danger($message);
		$this->serialize['error'] = $message;
	}
	public function redirect($route, $status = 302) {
		if($this->request->isJson()) {
			$this->serialize['message'] = [
				'redirect' => Router::url($route)
			];
			$this->serialize['code'] = $this->Auth->user() ? $this->isAuthorized() ? 302:403:401;
			$this->Auth->logout();
		    $this->request->session()->destroy('Auth');
		    $this->set($this->serialize);
		    $this->set('_serialize', array_keys($this->serialize));
		    $this->json = false;
		} else {
			parent::redirect($route, $status);
		}
	}
}