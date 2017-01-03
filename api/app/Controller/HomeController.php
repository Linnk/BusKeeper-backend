<?php

class HomeController extends AppController
{
	public $uses = array('Viaje', 'Punto');

	public function index()
	{
		$viajes = $this->Viaje->find('list');
		
		$this->set('viajes', $viajes);
	}
	public function submit($auth = null)
	{
		if(!empty($this->data))
		{
			if($this->Viaje->submit($this->data, $auth))
				exit('YES');

			throw new BadRequestException();
		}
	}
}