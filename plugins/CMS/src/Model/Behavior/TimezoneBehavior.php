<?php
	
namespace CMS\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Entity;
use Cake\ORM\Query;
use Cake\Event\Event;
use Cake\Datasource\EntityInterface;
use ArrayObject;
use Cake\I18n\Time;

class TimezoneBehavior extends Behavior
{
	public $fields = [];
	public $defaultOptions = [];
	
	public function initialize(array $config)
	{
		foreach($config as $key => $options) {
			if(is_array($options)) {
				$this->fields[$key] = $options;
			} else {
				$this->fields[$options] = $this->defaultOptions;
			}
		}
	}
	public function beforeFind(Event $event, Query $query, ArrayObject $options, $primary)
    {
	    $mapper = function($entity, $key, $mapReduce) {
			foreach($this->fields as $field => $options) {
				$now = Time::now();
				$entity->{$field} = $entity->{$field}->setTimezone($now->timezone);
			}
		    $mapReduce->emitIntermediate($entity, $key);
		};
		$reducer = function ($entity, $key, $mapReduce) {
		    $mapReduce->emit($entity[0], $key);
		};
	    $query->mapReduce($mapper, $reducer);
    }
	public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options)
    {
	    foreach($this->fields as $field => $options) {
			if(isset($data[$field]) && is_array($data[$field])){
				$time = new Time();
				$time->year = isset($data[$field]['year']) ? $data[$field]['year']:'0000';
				$time->month = isset($data[$field]['month']) ? $data[$field]['month']:'00';
				$time->day = isset($data[$field]['day']) ? $data[$field]['day']:'00';
				$time->hour = isset($data[$field]['hour']) ? $data[$field]['hour']:'00';
				$time->minute = isset($data[$field]['minute']) ? $data[$field]['minute']:'00';
				$time->second = isset($data[$field]['second']) ? $data[$field]['second']:'00';
				$data[$field] = $time->i18nFormat('yyyy-MM-dd HH:mm:ss', 'UTC');
			}
	    }
    }
}