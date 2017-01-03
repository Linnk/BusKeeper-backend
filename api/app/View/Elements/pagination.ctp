<?php $pagination_needed = (1 < (int) $this->Paginator->counter(array('format' => '{:pages}'))); ?>
<ul class="pagination pagination-sm <?php echo $pagination_needed ? '' : 'invisible'?>">
	<li><?php echo $this->Paginator->prev('«', array(), null, array('class' => 'prev disabled')); ?></li>
	<?php echo $this->Paginator->numbers(array('separator' => '', 'before' => '<li>', 'after' => '</li>')); ?>
	<li><?php echo $this->Paginator->next('»', array(), null, array('class' => 'next disabled')); ?></li>
</ul>
<p><small class="text-muted"><?php echo $this->Paginator->counter(array(
	'format' => __d('cake', 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
)); ?></small></p>
