<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
 
use Cake\Routing\Router;

$website_title = h($this->Settings->get('website_name', $this->name));
$website_description = h($this->Settings->get('website_description', $website_title));
$website_keywords = h($this->Settings->get('website_keywords', $website_title));
$website_favicon = Router::url($this->Settings->get('website_favicon', 'favicon.ico'), true);

?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title><?php echo $website_title ?> :: <?php echo $this->fetch('title') ?></title>
    <?php 
		echo $this->Html->meta('favicon', $website_favicon, ['type' => 'icon']);
		echo $this->Html->meta('description', $website_description);
		echo $this->Html->meta('keywords', $website_keywords);

		echo $this->Html->css('fonts.css');
		echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->css('navbar.css');
		echo $this->Html->css('Api.styles.css');
    
		echo $this->Html->script('jquery.min.js');
		echo $this->Html->script('tether.min.js');
		echo $this->Html->script('mootools.min.js');
		echo $this->Html->script('bootstrap.js');
		echo $this->Html->script('jstz.min.js');
		echo $this->Html->script('Api.forms.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
    <header>
		<?php echo $this->element('navbar') ?>
    </header>
    <div id="content">
	    <?php echo $this->Flash->render() ?>
	    <div class="container">
			<?php echo $this->element('breadcrumb') ?>
			<?php echo $this->fetch('content') ?>
		</div>
    </div>
</body>
</html>
