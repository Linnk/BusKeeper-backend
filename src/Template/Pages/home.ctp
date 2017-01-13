<?php
	use Cake\Datasource\ConnectionManager;
	
	$connection = ConnectionManager::get('api');
	$results = $connection->execute('
	SELECT  ruta,
			count(id),
			SUM(overspeeding),
			MAX(average_speed),
			AVG(rate_seguridad),
			AVG(rate_higiene),
			AVG(rate_puntualidad),
			AVG(rate_chofer),
			AVG(rate_comodidad)
	FROM    viajes
	WHERE   (total_time > 60) AND (total_distance > 300) AND (overspeeding > 0)
	GROUP BY    ruta
	ORDER BY	SUM(overspeeding) DESC
	LIMIT 5
	')->fetchAll('assoc');
	$rutas = [];
	$max = 0;
	foreach($results as $key => $result) {
		$rutas[$key] = [
			'ruta' => $result['ruta'],
			'average_speed' => $result['MAX(average_speed)'],
			'overspeedings' => $result['SUM(overspeeding)'],
			'rate_seguridad' => $result['AVG(rate_seguridad)'],
			'rate_higiene' => $result['AVG(rate_higiene)'],
			'rate_puntualidad' => $result['AVG(rate_puntualidad)'],
			'rate_chofer' => $result['AVG(rate_chofer)'],
			'rate_comodidad' => $result['AVG(rate_comodidad)']
		];
		//This is kind of pointless cuz they are "order by" overspeeding
		$max = $max < $result['SUM(overspeeding)'] ? $result['SUM(overspeeding)']:$max;
	}
?>
<div class="hero-background bg-dark">
	<div class="background" style="background-image: url(<?php echo $this->Settings->get('website_front_image') ?>);">
		
	</div>
	<div class="container text-xs-center">			
		<h1 class="mt-3"><img src="<?php echo $this->Settings->get('website_front_logo') ?>"></h1>
		<hr class="my-3 py-3 transparent">
		<div>
			<p class="emphasis"><span>Registra</span> <span>Evalúa</span> <span>Comparte</span></p>
			<p>La calidad del transporte público de tu ciudad.</p>
		</div>
		<hr class="my-3 transparent">
		<p class="h4 my-3">Descargar para</p>
		<div class="mid-container" style="width: 400px;">
			<div class="row">					
				<div class="col-xs-6">
					<a class="btn btn-block btn-outline-secondary" href="https://itunes.apple.com/mx/app/buskeeper-evalua-transporte/id691109375?mt=8" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i> <span>iOS</span></a>
				</div>
				<div class="col-xs-6">
					<a class="btn btn-block btn-outline-secondary" href="http://play.google.com/store/apps/details?id=com.lionwriter.buskeeper" target="_blank"><i class="fa fa-android" aria-hidden="true"></i> <span>Android</span></a>
				</div>
			</div>
		</div>
		<hr class="my-3 transparent">
		<a href="#leaderboard" class="btn btn-link text-white"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
	</div>
</div>
<div id="leaderboard" class="bg-gray py-3">
	<div class="container text-xs-center">
		<h2 class="page-title text-gray">Te haz preguntado...</h2>
		<p>¿Qué tan segura es la unidad de transporte público que utilizas?</p>
		<hr class="transparent">
		<div class="row">
			<div class="col-sm-6">
				<div class="leaderboard th">
					<div>
						<i class="icon fa fa-trophy" aria-hidden="true"></i>
						Puesto
					</div>
					<div>
						<i class="icon fa fa-bus" aria-hidden="true"></i>
						Ruta
					</div>
					<div>
						<i class="icon fa fa-tachometer" aria-hidden="true"></i>
						Velocidad promedio
					</div>
				</div>
			</div>
		</div>
		<?php $i=1; foreach($rutas as $ruta): ?>
			<div class="row">
				<div class="col-sm-6">
					<div class="leaderboard td">
						<div>
							<span class="value h3"><?php echo $i++ ?></span>
						</div>
						<div>
							<span class="value"><?php echo $ruta['ruta'] ?></span>
						</div>
						<div>
							<?php $color_class = $ruta['average_speed'] > 16.6 ? "text-danger":($ruta['average_speed'] > 13.8 ? "text-warning":"text-success"); ?>
							<span class="value <?php echo $color_class ?>"><?php echo $this->Format->kmh($ruta['average_speed'],'') ?></span>
							<small class="unit">km/h</small>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="leaderboard th text-xs-left">
						Excesos de velocidad
					</div>
					<div class="progress progress-custom">
						<div class="bar" style="width: <?php echo ($ruta['overspeedings']/$max)*100 ?>%;"></div>
						<div class="value"><?php echo $ruta['overspeedings'] ?></div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		<hr class="transparent">
		<p class="float-xs-right"><small>Estadísticas tomadas desde el 2013</small></p>
	</div>
</div>
<div id="how">
	<div class="container my-3 text-xs-center">
		<h2 class="page-title text-primary">¿Cómo funciona?</h2>
		<div class="row">
			<div class="col-md-4">
				<div class="step step-1">
					<div class="img">
						<img src="/img/step-1.png">
					</div>
					<p>Al llegar a tu parada o dentro del transporte público activa tu aplicación <span class="text-primary">Buskeeper</span> ingresa la ruta y presiona el botón de "comenzar viaje".</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="step step-2">
					<div class="img">
						<img src="/img/step-2.png">	
					</div>
					<p>Al llegar a tu destino guarda el viaje y califícalo, <span class="text-primary">Buskeeper</span> detectará violaciones viales tales como los excesos de velocidad entre otros.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="step step-3">
					<div class="img">
						<img src="/img/step-3.png">	
					</div>
					<p>Comparte tus resultados del viaje en Facebook o Twitter.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<hr class="transparent">
<div class=" py-3 text-xs-center">
	<div>
		<img src="/img/street.png" />
	</div>
</div>

<div id="why">
	<div class="container my-3 text-xs-center">
		<h2 class="page-title text-primary">Monitorea la calidad del transporte público de tu ciudad</h2>
		<div class="row">
			<div class="col-md-3">
				<div>
					<p>Toda la información que recolectes es evidencia que ayudará a denunciar injusticias viales.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div>
					<p>Los datos obtenidos son concentrados, procesados y publicados para que otros usuarios y autoridades correspondientes puedan consultar y utilizarlos para mejorar el servicio.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div>
					<p>El transporte público lo usamos todos pero lamentablemente nadie lo supervisa, es hora de tomar control y evaluar.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div>
					<p>Tu privacidad es nuestra prioridad; por lo que toda la información que se comparta será anónima.</p>
				</div>
			</div>
		</div>
		<hr class="transparent">
		<h1 class="my-3"><img src="<?php echo $this->Settings->get('website_blue_logo') ?>"></h1>
		<p class="h3 text-info">Exijamos un mejor servicio de transporte público :D</p>
		<div class="mid-container" style="width: 400px;">
			<p class="text-primary my-3 h3">Descargar para</p>
			<div class="row">					
				<div class="col-xs-6">
					<a class="btn btn-block btn-outline-primary" href="https://itunes.apple.com/mx/app/buskeeper-evalua-transporte/id691109375?mt=8" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i> <span>iOS</span></a>
				</div>
				<div class="col-xs-6">
					<a class="btn btn-block btn-outline-primary" href="http://play.google.com/store/apps/details?id=com.lionwriter.buskeeper" target="_blank"><i class="fa fa-android" aria-hidden="true"></i> <span>Android</span></a>
				</div>
			</div>
		</div>
	</div>
</div>