<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\ORM\TableRegistry;

class SettingsHelper extends Helper {
	protected $settings = [];
	protected $model = null;
	public function initialize(array $config) {
		parent::initialize($config);
		$this->model = TableRegistry::get("CMS.Settings");
	}
	public function set($settings = null, $value = null) {
		if(is_array($settings)) {
			$this->settings = array_merge($this->settings, $settings);
		} else if($settings !== null) {
			$this->settings[$settings] = $value;
		}
	}
	public function get($name = null, $default = null) {
		if($name !== null && isset($this->settings[$name])) {
			return $this->settings[$name];
		}
		if($name !== null && $this->find($name)) {
			return $this->settings[$name];
		}
		return $default;
	}
	public function find($name) {
		if($this->model) {
			if($setting = $this->model->findByName($name)->first()) {
				$this->settings[$setting->name] = $setting->value;	
				return true;
			}
		}
		return null;
	}
	public function getAll() {
		return $this->settings;
	}
}