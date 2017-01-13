<div class="viajes index" id="ScaffoldIndex">

<h2><?php echo __('Viajes') ?></h2>

<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover" id="ScaffoldTableIndex">
<thead>
<tr>
	<th>Ruta</th>
	<th>Unidad</th>
	<th>Fecha del viaje</th>
	<th>Duración</th>
	<th>Distancia</th>
	<th>Vel. Promedio</th>
	<th>Vel. Max</th>
	<th class="actions"><?php echo __d('cake', 'Acciones'); ?></th>
</tr>
</thead>
<tbody>
<?php foreach ($viajes as $viaje): ?>
	<tr>
		<td><span class="tag tag-pill tag-primary"><?php echo $viaje->ruta ?></span></td>
		<td><?php echo $viaje->unidad ?></td>
		<td><?php echo $this->Format->shortDate($viaje->start_date) ?></td>
		<td><?php echo $this->Format->timer($viaje->total_time) ?></td>
		<td><?php echo $this->Format->meters($viaje->total_distance) ?></td>
		<td><?php echo $this->Format->kmh($viaje->average_speed) ?></td>
		<td><?php echo $this->Format->kmh($viaje->max_speed) ?></td>
		<?php
			echo '<td class="actions"><div class="btn-group">';
			echo $this->Html->link('Abrir', array('action' => 'view', $viaje->id), array('class' => 'btn btn-primary btn-sm'));
			echo '</div></td>';
		?>
	</tr>
<?php endforeach; ?>
</tbody>
</table>

<?php if($this->Paginator->hasPrev() || $this->Paginator->hasNext()):?>
	<nav>
		<ul class="pagination">
			<?php 
				$this->Paginator->templates([
					'prevActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
					'number' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
					'current' => '<li class="page-item active"><a class="page-link" href="{{url}}">{{text}}</a></li>',
					'nextActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
				]);
				if($this->Paginator->hasPrev())
				echo $this->Paginator->prev('«');
				echo $this->Paginator->numbers();
				if($this->Paginator->hasNext())
				echo $this->Paginator->next('»')
			?>
		</ul>
	</nav>
<?php endif;?>

</div>