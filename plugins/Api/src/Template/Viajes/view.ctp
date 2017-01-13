<?php

$this->Html->script('Api.Chart.js/Chart', array('inline' => false));
$this->Html->script('Api.viajes.view', array('inline' => false));

?>

<div class="viajes index">

<h2><?php echo 'Ruta:'?> <span class="label label-default"><?php echo $viaje['Viaje']['ruta']; ?></span></h2>

<div class="row">
<div class="col-md-5">
<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered" style="">
<thead>
<tr>
	<th></th>
	<th>Datos importantes</th>
</tr>
</thead>
<tbody>
	<tr>
		<td class="data-table">UDID</td>
		<td><small><?php echo $viaje['Viaje']['udid'] ?></small></td>
	</tr>
	<tr>
		<td class="data-table">Ruta</td>
		<td><span class="label label-info"><?php echo $viaje['Viaje']['ruta'] ?></span></td>
	</tr>
	<tr>
		<td class="data-table">Unidad</td>
		<td><?php echo $viaje['Viaje']['unidad'] ?></td>
	</tr>
	<tr>
		<td class="data-table">Fecha de salida</td>
		<td><span class="label label-default"><?php echo $this->Format->fullDate($viaje['Viaje']['start_date']) ?></span></td>
	</tr>
	<tr>
		<td class="data-table">Fecha de llegada</td>
		<td><span class="label label-default"><?php echo $this->Format->fullDate($viaje['Viaje']['end_date']) ?></span></td>
	</tr>
	<tr>
		<td class="data-table">Velocidad Promedio</td>
		<td><?php echo $this->Format->kmh($viaje['Viaje']['average_speed']) ?></td>
	</tr>
	<tr>
		<td class="data-table">Velocidad Máxima</td>
		<td><?php echo $this->Format->kmh($viaje['Viaje']['max_speed']) ?></td>
	</tr>
	<tr>
		<td class="data-table">Distancia total</td>
		<td><?php echo $this->Format->meters($viaje['Viaje']['total_distance']) ?></td>
	</tr>
	<tr>
		<td class="data-table">Tiempo total</td>
		<td><?php echo $this->Format->timer($viaje['Viaje']['total_time']) ?></td>
	</tr>
	<tr>
		<td class="data-table">Total de paradas</td>
		<td><?php echo $viaje['Viaje']['total_stops'] ?></td>
	</tr>
	<tr>
		<td class="data-table">Escesos de velocidad<br />(+50 km/h)</td>
		<td><?php echo $this->Format->overspeeding($viaje['Viaje']['overspeeding']) ?></td>
	</tr>
	<tr>
		<td class="data-table">Tiempo de espera</td>
		<td><?php echo $this->Format->timer($viaje['Viaje']['wait_time']) ?></td>
	</tr>
	<tr>
		<td class="data-table">Tiempo gastado en paradas</td>
		<td><?php echo $this->Format->timer($viaje['Viaje']['total_wasted_time']) ?></td>
	</tr>
	<tr>
	<tr>
		<td class="data-table">Seguridad (Opinión)</td>
		<td><?php echo $this->Format->rate($viaje['Viaje']['rate_seguridad']) ?></td>
	</tr>
	<tr>
		<td class="data-table">Higiene (Opinión)</td>
		<td><?php echo $this->Format->rate($viaje['Viaje']['rate_higiene']) ?></td>
	</tr>
	<tr>
		<td class="data-table">Puntualidad (Opinión)</td>
		<td><?php echo $this->Format->rate($viaje['Viaje']['rate_puntualidad']) ?></td>
	</tr>
	<tr>
		<td class="data-table">Chofer (Opinión)</td>
		<td><?php echo $this->Format->rate($viaje['Viaje']['rate_chofer']) ?></td>
	</tr>
	<tr>
		<td class="data-table">Comodidad (Opinión)</td>
		<td><?php echo $this->Format->rate($viaje['Viaje']['rate_comodidad']) ?></td>
	</tr>
</tbody>
</table>
</div>

<style type="text/css">
#map_canvas { height: 500px; width: 100% }
</style>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDqz0o0MNv4NGiFVvTI5yiAcIhhcgK27yw&sensor=true"></script>

	<div class="col-md-7">
		<div id="map_canvas"></div>
		<hr />
		<!-- <canvas id="SpeedChart" width="500" height="200"></canvas> -->
	</div>
	
</div>
    
<hr />

<h3>Detalles técnico del GPS</h3>
<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover" id="GPSPoints">
<thead>
<tr>
	<th></th>
	<th>Timestamp</th>
	<th>Latitud</th>
	<th>Longitud</th>
	<th>Altitud</th>
	<th>Velocidad</th>
</tr>
</thead>
<tbody>
<?php $w_p = 1; $i=0; $data = array(); foreach ($viaje['Punto'] as $n => $punto): // $data[] = $punto['speed'] ?>
	<tr>
		<td>
			<?php echo $n+1 ?>
			<?php if(count($viaje['Punto']) >= 10 && $i%(count($viaje['Punto'])/10)==0): ?>
			<span id="waypointLat<?php echo $w_p; ?>" style="display:none;"><?php echo $punto['latitude'] ?></span>
			<span id="waypointLong<?php echo $w_p;$w_p++; ?>" style="display:none;"><?php echo $punto['longitude'] ?></span>
			<?php endif; ?>
		</td>
		<td><?php echo $this->Format->timeOnly($punto['timestamp']) ?></td>
		<td class="latitude"><?php echo $punto['latitude'] ?></td>
		<td class="longitude"><?php echo $punto['longitude'] ?></td>
		<td><?php echo $this->Format->meters($punto['altitude']) ?></td>
		<td><?php echo $this->Format->kmh($punto['speed']) ?></td>
	</tr>
<?php $i++; endforeach; ?>
</tbody>
</table>

<script type="text/javascript">
/*
	window.addEvent('domready', function(){

		var ctx = document.getElementById('SpeedChart').getContext('2d');
		var data = {
			labels : [<?php echo implode(',',$data) ?>],
			datasets : [
				{
					fillColor : "rgba(151,187,205,0.5)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,0)",
					pointStrokeColor : "#fff",
					data : [<?php echo implode(',',$data) ?>]
				}
			]
		}
		new Chart(ctx).Line(data);
		
	});
*/
</script>

</div>
