<div class="jumbotron">
	<div class="container">
		<h1>API Pública</h1>
		<p>Hola, la API pública de BusKeeper está todavía <strong>en construcción</strong>. Estamos terminando los componentes para proporcionar interfaces seguras a la información y que además sea lo más amigable posible.</p>
		<p>Si quieres explorar algunos de los reportes anónimos que ya existen, da click en el siguiente botón: </p>
		<p><?php echo $this->Html->link('Explorar enviados', '/viajes', array('class' => 'btn btn-primary btn-lg')) ?></p>
		<p>Si te interesa crear tu propia aplicación y colaborar con nuestra base de datos, puedes hacerlo solicitando una <strong>Clave Secreta</strong> con @<a href="http://twitter.com/Linnk" target="_blank">Linnk</a> para conectarte con nuestra plataforma abierta o haciendo fork en <a href="https://github.com/Linnk/BusKeeper-backend">Github</a>. :)</p>
		<p><?php echo $this->Html->link('API Pública (beta)', '/submit', array('class' => 'btn btn-default btn-lg')) ?></p>
	</div>
</div>
