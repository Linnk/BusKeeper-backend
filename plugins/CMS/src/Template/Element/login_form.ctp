<?php
/**
 * Login Form (element) : Simple responsive elements with login form
 *
 * Al the conventions for AuthComponent to work are in the form
 * Fields: 
 * 	username_or_email will search the username or the email
 * 	username will search the username
 * 	email will search the email
 * 	password will encrypt before search
 *
 * @copyright     Pewpew (2015)
 * @link          http://pewpew.mx Pewpew (2015)
 */
?>
<?php 
	echo $this->Form->create();
	$this->Form->templates([
		'input'					=> '<input type="{{type}}" class="form-control login" name="{{name}}" {{attrs}} />',
		'inputContainer'		=> '<div class="form-group">{{content}}</div>',
		'inputContainerError'	=> '<div class="form-group has-error">{{content}}<span class="help-block">{{error}}</span></div>'
	]);
	if($user_field == "username"):
		echo $this->Form->input('username',['id'=>'UserLoginFormUsername', 'placeholder'=>translate('Enter username')]);
	elseif($user_field == "email"):
		echo $this->Form->input('email',['id'=>'UserLoginFormEmail', 'placeholder'=>translate('Enter email')]);
	else:
		echo $this->Form->input('username_or_email',['id'=>'UserLoginFormEmailOrUsername', 'placeholder'=>translate('Enter email or username')]);
	endif;
	echo $this->Form->input('password',['id'=>'UserLoginFormPassword', 'placeholder'=>translate('Password')]);
	echo $this->Form->submit(translate('Login'),['class'=>'btn btn-default']);
	echo $this->Form->end();
?>