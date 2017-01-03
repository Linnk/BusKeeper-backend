<?php
/**
 * User's login (view) : Simple responsive elements with login form
 *
 * All this view does is load the login form from Elements
 *
 * @copyright     Pewpew (2015)
 * @link          http://pewpew.mx Pewpew (2015)
 */
?>
<div class="row">
	<div class="col-sm-4 col-sm-block">
	<?php 
		//load element of the complete form, with user_field you can select to log-in with:
		//username 	- which will do the auth with "username" and "password"
		//email 	- which will do the auth with "email" and "password"
		//both 		- which will do the auth with either "username" or "email" and "password"
		echo $this->element('login_form',array('user_field'=>'username')) ?>	
	</div>
</div>