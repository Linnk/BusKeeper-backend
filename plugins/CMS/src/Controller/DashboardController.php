<?php
	
namespace CMS\Controller;

use CMS\Model\Entity\Setting;

class DashboardController extends AppController {
	
    public function initialize() {
        parent::initialize();
        $this->loadModel('CMS.Settings');
        $this->loadModel('CMS.Users');
	}
	public function index() {
		if($this->request->data()) {
			foreach($this->request->data() as $name => $value) {
				$setting = $this->Settings->findByName($name)->first();
				if(!$setting) {
					$setting = $this->Settings->newEntity();
					$setting->name = $name;
				}
				if(is_array($value)) {
					$this->Settings->patchEntity($setting, ['id' => $setting->id, 'value' => $value]);
					$this->Settings->save($setting);
				} else {
					$setting->value = $value;
					$this->Settings->save($setting);
				}
				foreach($setting->errors() as $field => $errors) {
					foreach($errors as $error) {
						$this->Flash->danger(translate($error));	
					}
				}
			}
			$this->redirect(['action' => 'index']);
		}
		$users = $this->Users->find('list');
		$this->set('admins', $users);
		$this->render('dashboard');
	}
	public function isAuthorized($user = null) {
		return true;
	}
}