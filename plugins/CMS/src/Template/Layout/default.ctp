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

$website_title = h($this->Settings->get('website_name'));
$website_description = h($this->Settings->get('website_description'));
$website_keywords = h($this->Settings->get('website_keywords'));
$website_favicon = Router::url($this->Settings->get('website_favicon'), true);

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
		echo $this->Html->css('CMS.font-awesome.min.css');
		echo $this->Html->css('CMS.quill/quill.snow.css');
		echo $this->Html->css('CMS.styles.css');
		echo $this->Html->css('CMS.forms.css');
    
		echo $this->Html->script('CMS.mootools.min.js');
		echo $this->Html->script('CMS.bootstrap.js');
		echo $this->Html->script('CMS.jstz.min.js');
		echo $this->Html->script('CMS.quill/quill.js');
		echo $this->Html->script('CMS.quill/quill.snow.js');
		echo $this->Html->script('CMS.forms.js');
		echo $this->Html->script('CMS.elements.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
    <header>
		<?php echo $this->element('navbar', array('Role' => $Auth)) ?>
    </header>
    <div id="content">
	    <?php echo $this->Flash->render() ?>
	    <?php echo $this->Flash->render('auth_admin') ?>
	    <div class="container">
			<?php echo $this->element('breadcrumb') ?>
			<?php echo $this->fetch('content') ?>
		</div>
    </div>
</body>
</html>
