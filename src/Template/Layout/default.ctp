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
    
		echo $this->Html->script('mootools.min.js'.$suffix);
		echo $this->Html->script('navbar.js'.$suffix);

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
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
