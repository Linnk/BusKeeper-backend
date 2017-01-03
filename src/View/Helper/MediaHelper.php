<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\Helper\HtmlHelper;

class MediaHelper extends HtmlHelper {
	
	public function initialize(array $config) {
		parent::initialize($config);
	}
	public function image($path, array $options=[]) {
		if(isset($options['prefix'])) {
			return parent::image($this->addPrefix($options['prefix'], $path), $options);
		}
		return parent::image($path, $options);
	}
	public function addPrefix($prefix, $path, $split="/") {
		$paths = explode($split, $path);
		$filename = end($paths);
		$paths[count($paths) - 1] = $prefix.$filename;
		$path = implode($split, $paths);
		return $path;
	}
}