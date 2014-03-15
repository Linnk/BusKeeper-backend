<?php

class Viaje extends AppModel
{
	public $name = 'Viaje';
	public $useTable = 'viajes';
	
	public $hasMany = array('Punto');
}