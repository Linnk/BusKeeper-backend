<nav class="navbar navbar-dark bg-primary">
	<div class="container navbar-toggleable-xs">
		<ul class="nav navbar-nav pull-xs-left">
			<li class="nav-item">
				<?php
					$navbar_logo = $this->Html->image($this->Settings->get('navbar_brand_logo'), ['height'=>'32','style' => "-webkit-filter:brightness(200); filter:brightness(200); "]);
					echo $this->Html->link($navbar_logo, "/", [
						'class' => 'navbar-brand',
						'escape' => false
					]);
				?>
			</li>
		</ul>
		<ul class="nav navbar-nav">
			<li class="nav-item <?php echo $this->request['controller']=="Viajes" ? "active":"" ?>">
				<?php echo $this->Html->link('Viajes', array('controller' => 'Viajes', 'action' => 'index'), array('class'=>'nav-link')) ?>
			</li>
		</ul>
	</div>
</nav>