<?php
	echo $this->BForm->create($user, ['' => 'asd', 'class' => 'm-t-2']);
	echo $this->BForm->inputs([
		'first_name',
		'last_name',
		'email',
		'password' => [
			'type' => 'password'
		],
		'confirm_password' => [
			'type' => 'password'
		]
	], [
		'legend' => false
	]);
	echo $this->BForm->submit(translate('Create account'), ['class'=>'btn btn-primary btn-long m-b-2']);
	echo $this->BForm->end();
?>