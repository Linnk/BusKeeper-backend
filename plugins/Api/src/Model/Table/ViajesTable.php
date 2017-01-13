<?php 
	
namespace Api\Model\Table;

use ArrayObject;
use Cake\ORM\Table;
use Cake\ORM\Entity;
use Cake\ORM\Query;
use Cake\Event\Event;

class ViajesTable extends ApiTable
{
	public $associations = [
		'hasMany' => [
			'Api.Puntos' => [
				'key' => 'id',
				'propertyName' => 'Puntos',
				'foreignKey' => 'viaje_id',
				'bindingKey' => 'id',
				'display' => 'ruta',
				'table' => 'Puntos'
			]
		]
	];

	public function initialize(array $config)
    {	
	    parent::initialize($config);
		$this->addAssociations($this->associations);
    }
	public function submit($data_message, $auth)
	{
		$data = json_decode($data_message, true);

		$viaje = array('Viaje' => array(
			'udid' => $data['viaje']['udid'],
			'total_time' => $data['viaje']['totalTime'],
			'total_stops' => $data['viaje']['totalStops'],
			'ruta' => $data['viaje']['ruta'],
			'unidad' => $data['viaje']['unidad'],
			'average_speed' => $data['viaje']['averageSpeed'],
			'max_speed' => $data['viaje']['maxSpeed'],
			'rate_seguridad' => $data['viaje']['rateSeguridad'],
			'rate_higiene' => $data['viaje']['rateHigiene'],
			'rate_puntualidad' => $data['viaje']['ratePuntualidad'],
			'rate_chofer' => $data['viaje']['rateChofer'],
			'rate_comodidad' => $data['viaje']['rateComodidad'],
			'start_date' => $data['viaje']['startDate'],
			'wait_time' => $data['viaje']['waitTime'],
			'end_date' => $data['viaje']['endDate'],
			'overspeeding' => $data['viaje']['overspeeding'],
			'total_distance' => $data['viaje']['totalDistance'],
		));

		$source = null;
		if(!empty($auth) && is_string($auth))
		{
			if(hash_hmac("md5", $data_message, SECRET_KEY_IPHONE) == base64_decode($auth))
				$source = 'iPhone';
			elseif(hash_hmac("md5", $data_message, SECRET_KEY_ANDROID) == base64_decode($auth))
				$source = 'Android';
			elseif(hash_hmac("md5", $data_message, SECRET_KEY_THIRD_PARTY) == base64_decode($auth))
				$source = 'Third Party';
			elseif(hash_hmac("md5", $data_message, SECRET_KEY_DEV) == base64_decode($auth))
				exit('YES');
			else
				exit('Hold your horses, cowboy.');
		}
		else
		{
			CakeLog::write('non-auth-messages', print_r($viaje, true));
			$source = 'Unknown';
		}
		/*
		if(isset($data['synced']) && $data['synced']=='YES')
			exit('SYNCED: '.$data['synced']);
		*/
		$viaje['Viaje']['source'] = $source;

		$this->getDataSource()->begin();

		$this->id = null;
		if($this->save($viaje))
		{
			if(!empty($data['puntos']))
			{
				$viaje_id = $this->getLastInsertID();

				foreach($data['puntos'] as $punto)
				{
					$punto = array('Punto' => array(
						'viaje_id' => $viaje_id,
						'course' => $punto['course'],
						'altitude' => $punto['altitude'],
						'speed' => $punto['speed'],
						'horizontal_accuracy' => $punto['horizontalAccuracy'],
						'latitude' => $punto['latitude'],
						'longitude' => $punto['longitude'],
						'vertical_accuracy' => $punto['verticalAccuracy'],
						'timestamp' => $punto['timestamp'],
					));
					$this->Punto->id = null;
					$this->Punto->save($punto);
				}
			}
			$this->getDataSource()->commit();
			return true;
		}
		$this->getDataSource()->rollback();
		return false;
	}
}