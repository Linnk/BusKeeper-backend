<?php
	$legend = isset($legend) ? $legend:"Para continuar inicia sesión";
	echo $this->BForm->create();
	echo $this->BForm->inputs(['email','password'], ['legend' => $legend]);
	echo $this->BForm->submit(translate('Login'), ['class'=>'btn btn-primary btn-long']);
	echo $this->BForm->end();
?>
<p class="text-xs-center">
	<?php 
		msg("You do not have an account yet?");
		echo $this->Html->link(translate("Sign Up"), [
			'controller' => 'auth',
			'action' => 'register'
		], [
			'class' => 'btn btn-link'
		]);
	?>
</p>