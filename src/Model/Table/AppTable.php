<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\Entity;
use Cake\Event\Event;

class AppTable extends Table
{
	public static $database = "default";
	public static $local_database = "test";
	public $tablePrefix = "";
    public $default_behaviors = ['Timestamp', 'CMS.StringID'];
    
    public function initialize(array $config)
    {
	    parent::initialize($config);
		$this->table($this->tablePrefix.$this->table());

		foreach($this->default_behaviors as $behavior) {
			$this->addBehavior($behavior);	
		}
    }
    public static function defaultConnectionName()
    {	
		if($_SERVER['SERVER_ADDR'] == "127.0.0.1") {
			return self::$local_database;
		}
        return self::$database;
    }
}