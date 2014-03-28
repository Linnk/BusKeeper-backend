<ol class="breadcrumb">
<?php if(!isset($breadcrums)): ?>
	<li><?php echo $this->Html->link(__('Dashboard'), '/') ?></li>
<?php if($this->action==='index' || $this->name==='Dashboard'): ?>
	<li class="active"><?php echo isset($title_for_layout) ? $title_for_layout : __(Inflector::humanize(Inflector::underscore($this->name))); ?></li>
<?php else: ?>
	<li><?php echo $this->Html->link(__(Inflector::humanize(Inflector::underscore($this->name))), array('action' => 'index')) ?></li>
	<li class="active"><?php echo isset($title_for_layout) ? $title_for_layout : __(Inflector::humanize(Inflector::underscore($this->action))); ?></li>
<?php endif; else: $last_breadcrum_name = array_pop($breadcrums); foreach($breadcrums as $breadcrum_url => $breadcrum_name): ?>
	<li><?php echo $this->Html->link($breadcrum_name, $breadcrum_url) ?></li>
<?php endforeach; ?>
	<li class="active"><?php echo $last_breadcrum_name; ?></li>
<?php endif; ?>
</ol>