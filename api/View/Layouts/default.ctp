<!DOCTYPE html>
<html lang="es">
  <head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="shortcut icon" href="/ico/favicon.png">
	<?php
		echo $this->Html->css('bootstrap.min');
		//echo $this->Html->css('bootstrap-theme.min');
		echo $this->Html->css('buskeeper');

		//echo $this->Html->script('jquery-1.10.2.min');
		//echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('mootools-core-1.4.5-full-nocompat-yc');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    <meta name="description" content="Dashboard the BusKeeper" />
    <meta name="author" content="BusKeeper">

    <style>
      body {
        padding-top: 70px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>

  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">BusKeeper</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><?php echo $this->Html->link('Viajes', '/viajes') ?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

    	<?php echo $this->element('breadcrumb'); ?>

		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>

    </div> <!-- /container -->

	<div class="container">	
		<hr />
		<footer>
			<span class="text-muted pull-right">
				<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_US" title="BusKeeper data is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License."><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/80x15.png" /></a>
			</span>
			<p class="text-muted">&copy; BusKeeper 2013 — Desarrollado por @<a href="https://twitter.com/Linnk" target="_blank" title="Juan I. Benavides">Linnk</a>, @<a href="https://twitter.com/Bogue89" target="_blank" title="Jorge A. Benavides">Bogue89</a> y @<a href="https://twitter.com/CarlosImarch" target="_blank" title="Carlos Garza">CarlosImarch</a> en colaboración con @<a href="https://twitter.com/ZapopanLab" target="_blank" title="ZapopanLab">ZapopanLab</a> y <a href="http://plataformametropolitana.org/" target="_blank" title="Plataforma Metropolitana para la Sustentabilidad">Plataforma Metropolitana</a></p>
		</footer>
	</div>

	<?php echo $this->element('sql_dump'); ?>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-222275-8', 'buskeeper.com');
ga('send', 'pageview');

</script>
  </body>
</html>
