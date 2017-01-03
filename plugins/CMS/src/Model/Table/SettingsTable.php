<?php 
	
namespace CMS\Model\Table;

use ArrayObject;
use Cake\ORM\Table;
use Cake\ORM\Entity;
use Cake\Event\Event;
use Cake\Validation\Validator;
use Cake\Auth\DefaultPasswordHasher;


class SettingsTable extends CMSTable implements AoaTable
{
	public $associations = [];
	
	public $fields = [
		'list' => ['id','name','value','modified'],
		'form' => ['id','name','value' => ['input' => 'file']],
		'view' => ['id','name','value','modified']
	];
	public $actions = ['view', 'edit', 'delete'];
	
	public function initialize(array $config)
    {	
	    parent::initialize($config);	
		$this->addAssociations($this->associations);
		$this->addBehavior('CMS.Media', [
			'value' => [
				'dir' => 'files/settings',
				'save_fields' => [
					'width' => 'width',
					'height' => 'height',
					'type' => 'filetype',
					'link' => 'link'
				],
				'resizes' =>[
					'xs-' => array('width' => 320),
					'sm-' => array('width' => 640),
					'md-' => array('width' => 940),
					'lg-' => array('width' => 1600)
				]
			]
		]);
    }
    
	/*Interface AoaTable*/
	public function objectActions() {
		return $this->actions;
	}
	public function getAssociations() {
		return $this->associations;
	}
	public function getFields($template) {
		return $this->fields[$template];
	}
}