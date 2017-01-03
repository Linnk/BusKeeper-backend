<?php
	
namespace CMS\Model\Table;

interface AoaTable {
	public function objectActions();
	public function getAssociations();
	public function getFields($template);
}