<?php

namespace Api\Model\Table;

use Cake\ORM\Table;
use App\Model\Table\AppTable;

class ApiTable extends AppTable
{
	public static $database = "api";
	public static $local_database = "test_api";
	public $tablePrefix = "";
    public $default_behaviors = ['Timestamp', 'CMS.StringID'];
    
    public static function defaultConnectionName()
    {	
		if($_SERVER['SERVER_ADDR'] == "127.0.0.1") {
			return self::$local_database;
		}
        return self::$database;
    }
}