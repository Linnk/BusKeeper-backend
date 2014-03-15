<?php

class HomeController extends AppController
{
	public $uses = array('Viaje');

	public function index()
	{
		$viajes = $this->Viaje->find('list');
		
		$this->set('viajes', $viajes);
	}
}