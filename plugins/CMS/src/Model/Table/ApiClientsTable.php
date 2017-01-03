<?php 
	
namespace CMS\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\Entity;
use Cake\I18n\Time;

class ApiClientsTable extends CMSTable
{
	public function initialize(array $config)
    {
		$this->table("api_clients");
    }
}