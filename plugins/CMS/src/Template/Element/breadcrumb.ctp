<?php 
if(isset($this->breadcrumb) && $this->breadcrumb === false) {
	return;
}
use Cake\Utility\Inflector; 

$controller = $this->request->params['controller'];
$action 	= $this->request->params['action'];

$default = [
	'controller' => 'Dashboard',
	'action' => 'index',
	'index' => 'index',
	'pass' => []
];
?>
<ul class="breadcrumb">
	<li class="breadcrumb-item">
		<?php echo $this->Html->link(translate('Home'), array_merge(['controller' => $default['controller'], 'action' => $default['action']], $default['pass'])) ?>
		<span class="divider"></span>
	</li>
	<?php if($controller != $default['controller'] && $action != $default['action']): ?>
		<li class="breadcrumb-item">
			<?php echo $this->Html->link(translate(Inflector::humanize(Inflector::underscore($controller))), ['controller' => $controller, 'action' => $default['index']]) ?>
			<span class="divider"></span>
		</li>
		<?php if($action != $default['index']): ?>
		<li class="breadcrumb-item">
			<?php echo $this->Html->link(translate(Inflector::humanize(Inflector::underscore($action))), array_merge(['controller' => $controller, 'action' => $action], $this->request->params['pass'])) ?>
			<span class="divider"></span>
		</li>
		<?php endif;?>
	<?php endif;?>
</ul>