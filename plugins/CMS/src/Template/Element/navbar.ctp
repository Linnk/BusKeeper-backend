<?php 
	$navbar_links = [];
	if($Role):
		foreach($Role['Admin']['Role']['permissions'] as $permissions_name => $permissions):
			$controller = $permissions['controller'];
			$actions = $permissions['actions'];
			foreach($actions as $action => $options):
				$options = array_merge([
					'action' => 'index',
					'label' => humanize($action),
					'dropdown' => false,
					'navbar' => 0
				], $options);
				if($options['navbar']):
					if($options['dropdown']):
						$navbar_links[$options['dropdown']]['type'] = "dropdown";
						$navbar_links[$options['dropdown']]['links'][$controller][$action] = $options['label'];
					else:
						$navbar_links[$permissions_name]['type'] = "link";
						$navbar_links[$permissions_name]['links'][$controller][$action] = $options['label'];
					endif;
				endif;
			endforeach;
		endforeach;
	endif;
?><nav class="navbar navbar-dark navbar-fixed-top bg-primary">
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
	<?php if($Role): ?>
		<ul class="nav navbar-nav">
			<?php foreach($navbar_links as $permission => $navbar_link): ?>
					<?php $links = $navbar_link['links']; ?>
					<?php $type = $navbar_link['type']; ?>
					<?php if($type == "dropdown"): ?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#"><?php msg($permission) ?></a>
							<div class="dropdown-menu dropdown-menu-left">
							<?php foreach($links as $controller => $link): ?>
								<?php foreach($link as $action => $label): ?>
									<?php echo $this->Html->link(translate($label), array('controller' => $controller, 'action' => $action), array('class'=>'dropdown-item')) ?>
								<?php endforeach; ?>
							<?php endforeach; ?>
							</div>
						</li>
					<?php else: ?>
						<?php foreach($links as $controller => $link): ?>
							<?php foreach($link as $action => $label): ?>
								<li class="nav-item <?php echo $this->request['controller']==$controller ? "active":"" ?>">
									<?php echo $this->Html->link(translate($label), array('controller' => $controller, 'action' => $action), array('class'=>'nav-link')) ?>
								</li>
							<?php endforeach; ?>
						<?php endforeach; ?>
					<?php endif; ?>
			<?php endforeach; ?>
		</ul>
		<ul class="nav navbar-nav float-xs-right">
			<li class="nav-item dropdown">
				<a class="nav-link" href="#"><?php msg($Role['Admin']['name'], false) ?></a>
				<div class="dropdown-menu dropdown-menu-right">
					<?php echo $this->Html->link(translate("Edit"), ['controller' => 'Auth', 'action' => 'user_edit'], array('class'=>'dropdown-item')) ?>
					<?php //echo $this->Html->link(translate("Settings"), array('controller' => 'Settings', 'action' => 'index'), array('class'=>'dropdown-item')) ?>
					<?php echo $this->Html->link(translate("Logout"), array('controller' => 'Auth', 'action' => 'logout'), array('class'=>'dropdown-item')) ?>
				</div>
			</li>
		</ul>
	<?php else: ?>
		<ul class="nav navbar-nav float-xs-right">
			<li class="nav-item">
				<a class="nav-link" href="/login"><?php msg("Login") ?></a>
			</li>
		</ul>
	<?php endif; ?>
	</div>
</nav>