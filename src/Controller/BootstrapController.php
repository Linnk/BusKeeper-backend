<?php

namespace App\Controller;

use Cake\Controller\Controller;
use DOMDocument;
use DOMXPath;

class BootstrapController extends Controller {
	
	public function index() {
		$urls = [
			"http://v4-alpha.getbootstrap.com/layout/overview/",
			"http://v4-alpha.getbootstrap.com/layout/media-object/",
			"http://v4-alpha.getbootstrap.com/content/typography/",
			"http://v4-alpha.getbootstrap.com/content/tables/",
			"http://v4-alpha.getbootstrap.com/components/alerts/",
			"http://v4-alpha.getbootstrap.com/components/breadcrumb/",
			"http://v4-alpha.getbootstrap.com/components/buttons/",
			"http://v4-alpha.getbootstrap.com/components/card/",
			"http://v4-alpha.getbootstrap.com/components/button-group/",
			"http://v4-alpha.getbootstrap.com/components/dropdowns/",
			"http://v4-alpha.getbootstrap.com/components/forms/",
			"http://v4-alpha.getbootstrap.com/components/input-group/",
			"http://v4-alpha.getbootstrap.com/components/jumbotron/",
			"http://v4-alpha.getbootstrap.com/components/list-group/",
			"http://v4-alpha.getbootstrap.com/components/modal/",
			"http://v4-alpha.getbootstrap.com/components/navs/",
			"http://v4-alpha.getbootstrap.com/components/navbar/",
			"http://v4-alpha.getbootstrap.com/components/pagination/",
			"http://v4-alpha.getbootstrap.com/components/progress/",
			"http://v4-alpha.getbootstrap.com/components/tag/"	
		];
		$index = ROOT.DS.'src'.DS.'Template'.DS.'Pages'.DS.'bootstrap.ctp';
		$content = "<style>".file_get_contents(WWW_ROOT."css/bootstrap-example.css")."</style><br><br><br><h1>Bunch of Bootstrap elements</h1>";
		foreach($urls as $url) {
			$page = file_get_contents($url);
			$html = new DOMDocument();
			$html->encoding = 'UTF-8';
			libxml_use_internal_errors(true);
			$html->loadHTML(preg_replace('/\<\!DOCTYPE html\>|<head[\S\s]+<\/head>/i', '', $page));
			$xpath = new DOMXPath($html);
			$divs = $xpath->query('//div[contains(@class,"bd-content")]');
			foreach($divs as $div) {
				$bs_content = preg_replace('/".{0,}bd-content.{0,}"/i', 'bd-content', $html->saveHTML($div));
				$content .= $bs_content;
			}
		}
		file_put_contents($index, $content);
		exit;
	}
	
}