<?php 
	
namespace CMS\Model\Table;

use ArrayObject;
use Cake\ORM\Table;
use Cake\ORM\Entity;
use Cake\ORM\Query;
use Cake\Event\Event;
use Cake\Validation\Validator;
use Cake\Auth\DefaultPasswordHasher;

class UsersTable extends CMSTable implements AoaTable
{
	public $associations = [
		'belongsTo' => [
			'CMS.UserTypes' => [
				'key' => 'id',
				'propertyName' => 'UserType',
				'foreignKey' => 'user_type_id',
				'bindingKey' => 'id',
				'display' => 'name',
				'table' => 'UserTypes'
			]
		]
	];
	public $behaviors = [];
	public $fields = [
		'list' => ['name','email','user_type_id'],
		'form' => ['user_type_id','email','name','password'],
		'view' => ['user_type_id','email','name','password']
	];
	public $actions = ['view', 'edit', 'delete'];
	public $user_type_limitation = null;
	
	public function initialize(array $config)
    {	
	    parent::initialize($config);	
		$this->addAssociations($this->associations);
		foreach($this->behaviors as $name => $behavior) {
			$this->addBehavior($name, $behavior);
		}
		$this->primaryKey('sid');
    }
    public function validationDefault(Validator $validator)
    {
	    $validator = new Validator();
        $validator
        ->add('username', [
	        'length' => [
	            'rule' => ['minLength', 6],
	            'message' => 'Your username need to be at least 6 characters long.',
	        ],
	        'unique' => [
	            'rule' => 'validateUnique',
	            'message' => 'The username is already taken.',
	            'provider' => 'table'
	        ]
	    ])
        ->add('email', [
	        'format' => [
	            'rule' => 'email',
	            'message' => 'Your email address isn\'t valid.',
	        ],
	        'unique' => [
	            'rule' => 'validateUnique',
	            'message' => 'The email is already taken.',
	            'provider' => 'table'
	        ]
	    ])
        ->add('password', [
	        'length' => [
	            'rule' => ['minLength', 6],
	            'message' => 'Your password need to be at least 6 characters long.',
	        ],
	    ]);
        return $validator;
    }
    public function beforeFind(Event $event, Query $query, ArrayObject $options, $primary) {
	    if($this->user_type_limitation !== null) {
			$query->where(['user_type_id >=' => $this->user_type_limitation]);   
	    }
    }
    public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options) {
	    if(isset($data['password']))
			$data['password'] = (new DefaultPasswordHasher())->hash($data['password']);
    }
    public function beforeSave(Event $event, Entity $entity)
	{
		if($entity->isNew()) {       
		    if(isset($entity->email))
		        $entity->username = $entity->email;
	    } else {
	        //on update
	    }
	}
	public function getRole($id) {
		$user = $this->find()->contain(['UserTypes'])->where([
			'Users.id' => $id,
			'Users.active' => 1
		])->first();

		$permissions = json_decode($user['UserType']['permissions'], true);
		/*
		$role_dir = ROOT."/plugins/CMS/users/{$user['UserType']['role']}.json";
		$file = file_get_contents($role_dir);	
		$permissions = json_decode($file, true);
		$usertype = $this->UserTypes->get($user->user_type_id);
		$usertype->permissions = json_encode($permissions);
		pr($permissions);
		//file_put_contents($role_dir, json_encode($permissions, JSON_PRETTY_PRINT));
		$this->UserTypes->save($usertype);exit;/**/
		
		return [
			'Role' => [
				'name' => $user['UserType']['name'],
				'role' => $user['UserType']['role'],
				'permissions' => is_array($permissions) ? $permissions:array()
			]
		];
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