<?php 
	
namespace CMS\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\Entity;
use Cake\Event\Event;

class UserTypesTable extends CMSTable implements AoaTable
{
	public $associations = [
	];
	
	public $permissions_template = [
		'PermissionName' => [
			'controller' => 'ControllersName',
			'actions' => [
				'index' => [
					'label' => 'DisplayName in case of navbar present',
					'navbar' => 1 // 0 means you have permission but not a link
				],
				'*' => [] // You can grant permissions to all actions in a controller with ease
			]
		]
	];
	public $fields = [
		'list' => ['name','role','info'],
		'form' => ['name','role','info'],
		'view' => ['name','role','info']
	];
	public $actions = ['view', 'edit', 'delete'];
	
	public function initialize(array $config)
    {
		parent::initialize($config);
		$this->primaryKey('sid');
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