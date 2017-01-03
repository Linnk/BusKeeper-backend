<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\Helper\FormHelper;

class BFormHelper extends FormHelper {
	
	public function initialize(array $config) {
		parent::initialize($config);
		$this->templates([
			'input'					=> '<input {{attrs}} type="{{type}}" class="form-control" name="{{name}}" />',
			'inputContainer'		=> '<div {{attrs}} class="form-group">{{content}}</div>',
			'inputContainerError'	=> '<div {{attrs}} class="form-group has-danger">{{content}}<div class="form-control-feedback">{{error}}</div></div>',
			'label'					=> '<label {{attrs}} class="form-control-label">{{text}}</label>',
			'select'				=> '<select {{attrs}} class="form-control" name="{{name}}">{{content}}</select>',
			'dateWidget'			=> '<div class="date-widget"><div class="date">{{year}}{{month}}{{day}}<i class="fa fa-calendar"></i></div><div class="time">{{hour}} : {{minute}}{{second}}<i class="fa fa-clock-o"></i></div></div>',
			'textarea'				=> '<textarea {{attrs}} type="{{type}}" class="form-control" name="{{name}}">{{value}}</textarea>',
			'checkbox'				=> '<input {{attrs}} type="checkbox" class="form-control" name="{{name}}" />',
			'nestingLabel'			=> '<label {{attrs}} >{{text}}</label>{{hidden}}{{input}}',
			'button'				=> '<button {{attrs}} class="btn">{{text}}</button>',
			'error'					=> '{{content}}'
		]);
	}
}