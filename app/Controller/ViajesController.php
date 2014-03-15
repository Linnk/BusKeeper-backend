<?php

class ViajesController extends AppController
{
	public $uses = array('Viaje','Punto');
	public $paginate = array(
		'order' => array('Viaje.start_date' => 'DESC'),
		'limit' => 15
	);
	public function index()
	{
		$viajes = $this->paginate('Viaje');
		
		$this->set('viajes', $viajes);
	}
	public function view($viaje_id = null)
	{
		if(!$viaje = $this->Viaje->findById($viaje_id))
			$this->redirect('/viajes');
		
		$this->set('viaje', $viaje);
		$this->set('title_for_layout', 'Ruta '.$viaje['Viaje']['ruta']);
	}
	public function send_data($auth = null)
	{
		if(!empty($this->data))
		{
			$data_message = $this->data;
			$this->data = json_decode($this->data, true);

			$viaje = array('Viaje' => array(
				'udid' => $this->data['viaje']['udid'],
				'total_time' => $this->data['viaje']['totalTime'],
				'total_stops' => $this->data['viaje']['totalStops'],
				'ruta' => $this->data['viaje']['ruta'],
				'unidad' => $this->data['viaje']['unidad'],
				'average_speed' => $this->data['viaje']['averageSpeed'],
				'max_speed' => $this->data['viaje']['maxSpeed'],
				'rate_seguridad' => $this->data['viaje']['rateSeguridad'],
				'rate_higiene' => $this->data['viaje']['rateHigiene'],
				'rate_puntualidad' => $this->data['viaje']['ratePuntualidad'],
				'rate_chofer' => $this->data['viaje']['rateChofer'],
				'rate_comodidad' => $this->data['viaje']['rateComodidad'],
				'start_date' => $this->data['viaje']['startDate'],
				'wait_time' => $this->data['viaje']['waitTime'],
				'end_date' => $this->data['viaje']['endDate'],
				'overspeeding' => $this->data['viaje']['overspeeding'],
				'total_distance' => $this->data['viaje']['totalDistance'],
			));
			if(!empty($auth) && is_string($auth))
			{
				$hash_hmac = hash_hmac("md5", $data_message, SECRET_KEY_HMAC);

				if($hash_hmac != base64_decode($auth))
					exit('Hold your horses! '.$hash_hmac.' != '.base64_decode($auth));
			}
			else
				file_put_contents(TMP.'/last-non-auth-message.log', date('Y-m-d H:i:s')."\n".print_r($viaje, true), LOCK_EX);

			if(isset($this->data['synced']) && $this->data['synced']=='YES')
				exit('SYNCED: '.$this->data['synced']);

			if($this->Viaje->save($viaje))
			{
				if(!empty($this->data['puntos']))
				{
					$viaje_id = $this->Viaje->getLastInsertID();
	
					foreach($this->data['puntos'] as $punto)
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
				exit('YES');
			}			
		}

		throw new BadRequestException();
	}

}
