<nav id="navbar-sidebar" class="navbar navbar-dark navbar-left-side bg-light">
	<ul class="nav navbar-nav">
		<li class="nav-item">
			<?php
				echo $this->Html->link(translate("API"), "/api", [
					'class' => 'nav-link',
					'escape' => false
				]);
			?>
		</li>
		<li class="nav-item">
			<?php
				echo $this->Html->link(translate("Licencia"), "https://creativecommons.org/licenses/by-nc-sa/3.0/deed.es_MX",[
					'class' => 'nav-link',
					'target' => '_blank',
					'escape' => false
				]);
			?>
		</li>
	</ul>
</nav>
<nav class="navbar navbar-dark navbar-fixed-top bg-clear">
	<div class="container navbar-toggleable-xs">
		<ul class="nav navbar-nav pull-xs-left">
			<li class="nav-item">
				<?php
					$navbar_logo = $this->Html->image($settings['navbar_brand_logo'], ['height'=>'32']);
					$navbar_text = " <small class=\"text-sm hidden-sm-down\">Monitorea la calidad del transporte público de tu ciudad.</small>";
					echo $this->Html->link($navbar_logo.$navbar_text, "/", [
						'class' => 'navbar-brand',
						'escape' => false
					]);
				?>
			</li>
		</ul>
		<ul class="nav navbar-nav pull-xs-right">
			<li class="nav-item">
				<?php
					$navbar_text = "<span class=\"hidden-sm-down\">".translate("Menu")."</span> <i class=\"fa fa-bars\"></i>";
					echo $this->Html->link($navbar_text, "#menu_open", [
						'class' => 'nav-link',
						'data-toggle' => 'navbar',
						'data-target' => '.navbar-left-side',
						'data-duration' => '500',
						'escape' => false
					]);
				?>
			</li>
		</ul>
	</div>
</nav>