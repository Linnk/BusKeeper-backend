<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Scaffolds
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$this->Html->script('scaffold.form', array('inline' => false));

?>
<ul class="breadcrumb">
<?php if(!isset($breadcrums)): ?>
	<li><?php echo $this->Html->link(__('Dashboard',true), '/') ?><span class="divider">/</span></li>
	<li><?php echo $this->Html->link($pluralHumanName, array('action' => 'index')) ?><span class="divider">/</span></li>
	<li class="active"><?php echo ucfirst($this->action); ?></li> 
<?php else: $last_breadcrum_name = array_pop($breadcrums); foreach($breadcrums as $breadcrum_url => $breadcrum_name): ?>
	<li><?php echo $this->Html->link($breadcrum_name, $breadcrum_url) ?><span class="divider">/</span></li>
<?php endforeach; ?>
	<li class="active"><?php echo $last_breadcrum_name; ?></li>
<?php endif; ?>
</ul>
<div class="<?php echo $pluralVar; ?> scaffold-form" id="ScaffoldForm">
 <div class="btn-group pull-right scaffold-more-actions">
  <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><?php echo __d('cake', 'More Actions'); ?> <span class="caret"></span></a>
  <ul class="dropdown-menu">
<?php if ($this->request->action != 'add'): ?>
		<li><?php echo $this->Scaffold->postLink(
			__d('cake', 'Delete'),
			array('action' => 'delete', $this->Scaffold->value($modelClass . '.' . $primaryKey)),
			null,
			__d('cake', 'Are you sure you want to delete # %s?', $this->Scaffold->value($modelClass . '.' . $primaryKey)));
		?></li>
<?php endif; ?>
		<li><?php echo $this->Html->link(__d('cake', 'List') . ' ' . $pluralHumanName, array('action' => 'index')); ?></li>
<?php
		$done = array();
		foreach ($associations as $_type => $_data) {
			foreach ($_data as $_alias => $_details) {
				if ($_details['controller'] != $this->name && !in_array($_details['controller'], $done)) {
					echo "\t\t<li>" . $this->Html->link(__d('cake', 'List %s', Inflector::humanize($_details['controller'])), array('controller' => $_details['controller'], 'action' => 'index')) . "</li>\n";
					echo "\t\t<li>" . $this->Html->link(__d('cake', 'New %s', Inflector::humanize(Inflector::underscore($_alias))), array('controller' => $_details['controller'], 'action' => 'add')) . "</li>\n";
					$done[] = $_details['controller'];
				}
			}
		}
?>
  </ul>
</div>

<?php
	echo $this->Scaffold->create(null, array('type' => 'file', 'class' => 'form-horizontal', 'inputDefaults' => array(
  //  'div' => 'control-group',
    'label' => array('class' => 'control-label'),
    'between' => '<div class="controls">',
    'after' => '</div>',
    'autocomplete' => 'off',
    'class' => 'span4',
    'error' => array('attributes' => array('wrap' => 'span', 'class' => 'alert alert-error span4')),
    'format' => array('before', 'label', 'between', 'input', 'error', 'after')
))); ?>
	<?php echo $this->Scaffold->inputs($schemaFields, $scaffoldFieldsNotForForm); ?>
	
	<?php if(isset($meta_fields) && !empty($meta_fields)): foreach($meta_fields as $meta_field): ?>
	<?php echo $this->Scaffold->metaInput($meta_field); ?>
	<?php endforeach; endif; ?>
	<div class="control-group">
		<div class="controls submit-buttons">
	<?php if($pluralHumanName=='Clients' || $pluralHumanName=='Prospects'): ?>
			<button type="submit" name="submit" value="save_view" class="btn btn-primary" data-loading-text="Loading..."><?php echo __d('cake', 'Save & View') ?></button>
	<?php endif; ?>
			<button type="submit" name="submit" value="save" class="btn" data-loading-text="Loading..."><?php echo __d('cake', 'Save') ?></button>
			<?php echo $this->Html->link('Cancel', array('action' => 'index'), array('class' => 'btn')) ?>
		</div>
	</div>
	<?php echo $this->Scaffold->end(); ?>
</div>
