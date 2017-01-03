<?php

App::uses('CakeNumber', 'Utility');
App::uses('CakeTime', 'Utility');

?>

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
<?php foreach ($viajes as $viaje): $row = $viaje['Viaje']; ?>
	<tr>
		<td><span class="label label-info"><?php echo $row['ruta'] ?></span></td>
		<td><?php echo $row['unidad'] ?></td>
		<td><?php echo $this->Format->shortDate($row['start_date']) ?></td>
		<td><?php echo $this->Format->timer($row['total_time']) ?></td>
		<td><?php echo $this->Format->meters($row['total_distance']) ?></td>
		<td><?php echo $this->Format->kmh($row['average_speed']) ?></td>
		<td><?php echo $this->Format->kmh($row['max_speed']) ?></td>
		<?php
			$row_id = $row['id'];
			echo '<td class="actions"><div class="btn-group">';
			echo $this->Html->link('Abrir', array('action' => 'view', $row_id), array('class' => 'btn btn-default btn-xs'));
			echo '</div></td>';
		?>
	</tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo $this->element('pagination') ?>

</div>