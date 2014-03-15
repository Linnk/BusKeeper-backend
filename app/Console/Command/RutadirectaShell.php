<?php

App::uses('HttpSocket', 'Network/Http');
require_once(APP.'Lib'.DS.'Polyline.php')

class Rutadirecta extends AppShell
{
	public $uses = array('Ruta');

	function test($id = null)
	{
		$HttpSocket = new HttpSocket();
		
		if($id==null)
			$id = 357;

		$results = $HttpSocket->post('http://gdl.rutadirecta.com/ajax/obtener_ruta', 'id='.$id);
		
		$ruta = json_decode($results->body, true);
		
		if(!Set::check($ruta,'0.id'))
			return false; // exit('No tiene ID válido');

		$ruta_id = Set::get($ruta,'0.id');
		
		$data = array('Ruta' => array());
		foreach($ruta[0] as $field => $value)
		{
			$data['Ruta'][Inflector::underscore($field)] = $value;
		}
		

		$this->Ruta->id = $ruta_id;
		return $this->Ruta->save($data);
	}
	function main()
	{
		$id = 1;
		for($id=1; $id <= 2431; $id++)
		{
			$saved = $this->test($id) ? 'OK' : 'Error';
			$this->out("RUTA ID: $id — $saved");
		}
	}
}
