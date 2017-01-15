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
use Cake\Core\Configure;

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
    
    <title><?php echo $website_title ?></title>
    <?php 
		echo $this->Html->meta('favicon', $website_favicon, ['type' => 'icon']);
		echo $this->Html->meta('description', $website_description);
		echo $this->Html->meta('keywords', $website_keywords);
		
		if($this->Settings->get('website_share_image')):
			echo $this->Content->metas([
				'title' => $website_title,
				'description' => $website_description,
				'keywords' => $website_keywords,
				'image' => Router::url($this->Settings->get('website_share_image'), true),
				'icon' => Router::url($this->Settings->get('website_share_image'), true),
				'url' => Router::url($this->request->here, true)
			], $this->request->header('User-Agent'));
		else:
			echo $this->Content->metas([
				'title' => $website_title,
				'description' => $website_description,
				'keywords' => $website_keywords,
				'url' => Router::url($this->request->here, true)
			], $this->request->header('User-Agent'));
		endif;
		
		$suffix = Configure::read('debug') ? "?id=".rand(1,1000):"";
		
		echo $this->Html->css('bootstrap.min.css'.$suffix);
		echo $this->Html->css('font-awesome.min.css'.$suffix);
		echo $this->Html->css('fonts.css'.$suffix);
		echo $this->Html->css('navbar.css'.$suffix);
		echo $this->Html->css('styles.css'.$suffix);
		echo $this->Html->css('pages.css'.$suffix);
    
		echo $this->Html->script('jquery.min.js'.$suffix);
		echo $this->Html->script('tether.min.js'.$suffix);
		echo $this->Html->script('bootstrap.min.js'.$suffix);
		echo $this->Html->script('ratings.js'.$suffix);

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	
	<meta property="twitter:card" name="twitter:card" value="summary">
	<meta property="twitter:title" name="twitter:title" content="BusKeeper - Registra y evalúa la calidad del transporte público."/>
	<meta property="twitter:description" name="twitter:description" content="Monitorea la calidad del transporte público de tu ciudad. Comparte los resultados con tus amigos."/>
	<meta property="twitter:image" name="twitter:image" content="http://buskeeper.com/files/settings/GPXHENQZN.jpg"/>
	
	<meta property="og:url" name="og:url" content="http://buskeeper.com/"/>
	<meta property="og:type" name="og:type" content="website"/>
	<meta property="og:title" name="og:title" content="BusKeeper - Registra y evalúa la calidad del transporte público."/>
	<meta property="og:description" name="og:description" content="Monitorea la calidad del transporte público de tu ciudad. Comparte los resultados con tus amigos."/>
	<meta property="og:image" name="og:image" content="http://buskeeper.com/files/settings/GPXHENQZN.jpg"/>
</head>
<body>
    <?php //echo $this->element('navbar') ?>
    <div id="content">
	    <?php echo $this->Flash->render() ?>
		<?php echo $this->Flash->render('auth_user') ?>
        <?php echo $this->fetch('content') ?>
    </div>
    <?php echo $this->element('footer') ?>
</body>
</html>
