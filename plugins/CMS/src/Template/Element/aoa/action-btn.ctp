<?php
use Cake\Utility\Inflector;
$btn_type = "primary";
$btn_icon = "";
$_confirmation = false;
if(!isset($params) || !is_array($params)) {
	$params = array();
}
if($action == "delete" || $action == "remove" || $action == "eliminate") {
	$btn_type = "danger";
	$btn_icon = "times";
	$_confirmation = true;
} else if($action == "view" || $action == "detail") {
	$btn_icon = "eye";
} else if($action == "edit" || $action == "modify") {
	$btn_icon = "edit";
} else if($action == "add" || $action == "new") {
	$btn_icon = "plus";
}
echo $this->Html->link("<span class=\"glyphicon glyphicon-{$btn_icon}\"></span> ".__(Inflector::humanize($action)),
	array_merge($params, array('controller'=>$controller, 'action'=>$action)),
	array('class'=>"btn btn-sm btn-{$btn_type}-outline",'escape'=>false, 'confirm' => $_confirmation ? __("Are you sure?"):false)
);