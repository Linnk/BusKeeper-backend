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

$this->Html->script('scaffold.index', array('inline' => false));

App::uses('CakeNumber', 'Utility');
App::uses('CakeTime', 'Utility');

?>

<ul class="breadcrumb">
<?php if(!isset($breadcrums)): ?>
	<li><?php echo $this->Html->link(__('Dashboard'), '/dashboard') ?><span class="divider">/</span></li>
	<li class="active"><?php echo __($pluralHumanName); ?></li>
<?php else: $last_breadcrum_name = array_pop($breadcrums); foreach($breadcrums as $breadcrum_url => $breadcrum_name): ?>
	<li><?php echo $this->Html->link($breadcrum_name, $breadcrum_url) ?><span class="divider">/</span></li>
<?php endforeach; ?>
	<li class="active"><?php echo $last_breadcrum_name; ?></li>
<?php endif; ?>
</ul>

<div class="<?php echo $pluralVar; ?> index" id="ScaffoldIndex">




<div class="row">
	<h2 class="span7"><?php echo $pluralHumanName; ?></h2>
	<div class="span5 scaffold-actions">
		<?php echo $this->Html->link('<span class=" icon-plus"></span> '.__d('cake', 'New %s', $singularHumanName), array('action' => 'add'), array('class' => 'btn pull-right', 'escape' => false)); ?>
		<div class="btn-group pull-right none">
		  <?php echo $this->Html->link(__d('cake', 'New %s', $singularHumanName), array('action' => 'add'), array('class' => 'btn')); ?>
		
		  <button class="btn dropdown-toggle" data-toggle="dropdown">
		    <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu">
		  	<li><?php echo $this->Html->link('<span class=" icon-search"></span> '.__('Search'), array('action' => 'search'), array('escape' => false)) ?></li>
		  	<li><?php echo $this->Html->link('<span class=" icon-download-alt"></span> '.__('Export to CVS'), array('action' => 'export_cvs'), array('escape' => false)) ?></li>
		  <ul>
		</div>
	</div>
</div>


<table cellpadding="0" cellspacing="0" class="table table-striped table-hover" id="ScaffoldTableIndex">
<thead>
<tr>
<?php $n=0; foreach ($scaffoldFields as $_field): $classes_for_td = $n>0 ? ($n>3 ? 'hidden-tablet hidden-phone' : 'hidden-phone') : ''; ?>
	<th class="<?php echo $classes_for_td ?>"><?php echo $this->Paginator->sort($_field); ?></th>
<?php $n++; endforeach; ?>
	<th class="actions"><?php echo __d('cake', 'Actions'); ?></th>
</tr>
</thead>
<tbody>
<?php
$i = 0;
foreach (${$pluralVar} as ${$singularVar}):

	echo '<tr>';
	$n=0;
	$row_id = ${$singularVar}[$modelClass][$primaryKey];
	foreach ($scaffoldFields as $_field) { 
		$classes_for_td = ($n>0 ? ($n>3 ? 'hidden-tablet hidden-phone' : 'hidden-phone') : '').' '.$schemaFields[$_field]['type'];
		$isKey = false;
		if (!empty($associations['belongsTo'])) {
			foreach ($associations['belongsTo'] as $_alias => $_details) {
				if ($_field === $_details['foreignKey']) {
					$isKey = true;
					echo "<td class=\"$classes_for_td\">" . $this->Html->link(${$singularVar}[$_alias][$_details['displayField']], array('controller' => $_details['controller'], 'action' => 'view', ${$singularVar}[$_alias][$_details['primaryKey']])) . "</td>";
					break;
				}
			}
		}
		if($_field==='profile_picture') {
			echo '<td class="'.$classes_for_td.'"><a href="/users/view/'.$row_id.'"><img src="/files/users/small.'.${$singularVar}[$modelClass][$_field].'" border="0" width="30" class="img-circle" /></a> <span class="profile-picture-name">'.${$singularVar}[$modelClass]['name'].'</span></td>';
		}
		elseif($schemaFields[$_field]['type']==='datetime') {
			$formatted_date = CakeTime::format(__('F jS, h:i A'), ${$singularVar}[$modelClass][$_field]);
			echo "<td class=\"$classes_for_td\">$formatted_date</td>";
		}
		elseif ($isKey !== true) {
			echo "<td class=\"$classes_for_td\">" . h(${$singularVar}[$modelClass][$_field]) . "</td>";
		}
		$n++;
	}
	echo '<td class="actions"><div class="btn-group">';
	echo $this->Html->link(__d('cake', 'View'), array('action' => 'view', $row_id), array('class' => 'btn btn-mini'));
	echo $this->Html->link(__d('cake', 'Edit'), array('action' => 'edit', $row_id), array('class' => 'btn btn-mini'));
	echo $this->Form->postLink(
		__d('cake', 'Delete'),
		array('action' => 'delete', $row_id),
		array('class' => 'btn btn-danger btn-mini hidden-phone'),
		__d('cake', 'Are you sure you want to delete this %s', $singularHumanName).'?'
	);
	echo '</div></td>';
	echo '</tr>';
$i++;
endforeach;

?>
</tbody>
</table>
	<?php $pagination_needed = (1 < (int) $this->Paginator->counter(array('format' => '{:pages}'))); ?>
	<div class="pagination pagination-centered pagination-small <?php echo $pagination_needed ? '' : 'invisible'?>">
		<ul>
			<li><?php echo $this->Paginator->prev('«', array(), null, array('class' => 'prev disabled')); ?></li>
			<?php echo $this->Paginator->numbers(array('separator' => '', 'before' => '<li>', 'after' => '</li>')); ?>
			<li><?php echo $this->Paginator->next('»', array(), null, array('class' => 'next disabled')); ?></li>
		</ul>
	</div>
	<div class="paginator-counter">
		<div class="pull-right hidden-phone">
			<div class="btn-group pull-right">
				<?php echo $this->Html->link('<span class=" icon-download-alt"></span> '.__('Export to CVS'), array('action' => 'export_cvs'), array('class' => 'btn btn-small', 'escape' => false)) ?>
<?php if(isset($schemaFields['order'])): ?>
				<?php echo $this->Html->link('<span class=" icon-move"></span> '.__('Sortable'), '#', array('class' => 'btn btn-small hidden-tablet hidden-phone', 'escape' => false, 'id' => 'EnableSortable')) ?>
				<?php echo $this->Html->link(__('Save order'), '#', array('class' => 'btn btn-primary btn-small none', 'escape' => false, 'id' => 'SaveSortable')) ?>
				<?php echo $this->Html->link(__('Cancel order'), '#', array('class' => 'btn btn-small none', 'escape' => false, 'id' => 'CancelSortable')) ?>
<?php endif; ?>
				<?php echo $this->Html->link(__d('cake', 'New %s', $singularHumanName), array('action' => 'add'), array('class' => 'btn btn-small')); ?>
				
				<?php $done = array(); foreach ($associations as $_type => $_data): if(!empty($_data)): ?>
				  <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				<?php foreach ($_data as $_alias => $_details):
						if($_details['controller'] != $this->name && !in_array($_details['controller'], $done)):
							echo "<li>" . $this->Html->link(__d('cake', 'List %s', Inflector::humanize($_details['controller'])), array('controller' => $_details['controller'], 'action' => 'index')) . "</li>";
							//echo "<li>" . $this->Html->link(__d('cake', 'New %s', Inflector::humanize(Inflector::underscore($_alias))), array('controller' => $_details['controller'], 'action' => 'add')) . "</li>";
							$done[] = $_details['controller'];
						endif;
					endforeach;
					echo '</ul>';
				  endif; endforeach; ?>
			</div>
		</div>
		<p class="muted"><?php echo $this->Paginator->counter(array(
			'format' => __d('cake', 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		)); ?></p>
	</div>
</div>