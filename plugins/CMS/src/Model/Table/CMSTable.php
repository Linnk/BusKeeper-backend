<?php

namespace CMS\Model\Table;

use Cake\ORM\Table;
use App\Model\Table\AppTable;

class CMSTable extends AppTable
{
	public static $database = "default";
	public static $local_database = "test";
	public $tablePrefix = "cms_";
    public $default_behaviors = ['Timestamp', 'CMS.StringID'];
}