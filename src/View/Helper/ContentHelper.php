<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\I18n\Number;
use Cake\I18n\Time;
use Cake\I18n\I18n;

class ContentHelper extends Helper {
	
	public function initialize(array $config) {
		parent::initialize($config);
	}
	public function summary($content, $content_length = 70, $tail = '…'){
		$content = strip_tags($content); //Strips tags and images
		$words = explode(' ', $content, $content_length + 1); //Sets excerpt length by word count
		if(count($words) > $content_length):
			array_pop($words);
			$content = implode(' ', $words).$tail;
		endif;
		return $content;
	}
	public function extract($content, $content_length = 20, $tail = '…'){
		$content = strip_tags($content); //Strips tags and images
		if(strlen($content)>$content_length):
			$content = trim(substr($content, 0, $content_length)).$tail; //Sets excerpt length by letter count
		endif;
		return $content;
	}
	public function lorem($plain_text = true){
		return $plain_text ? "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu mi quis erat ullamcorper interdum. Curabitur ipsum sapien, elementum a magna placerat, vulputate ornare turpis. Maecenas faucibus suscipit orci, ac porttitor sem venenatis a. Etiam sed vulputate ipsum, sit amet vestibulum velit. Donec accumsan dapibus risus sit amet accumsan. Curabitur sed ex maximus, vulputate neque a, suscipit risus. Praesent tristique sem id lacus rhoncus consequat. Aenean vel orci nec elit ultrices ultricies. Proin elementum nibh ante, sit amet sollicitudin velit bibendum at. Donec quam augue, dictum sit amet metus vel, tincidunt rutrum nibh. Suspendisse mi ante, scelerisque vitae efficitur non, sollicitudin nec ligula. Vivamus eu neque ultrices, pulvinar odio non, imperdiet magna. Praesent suscipit erat vitae lorem tempor, vitae commodo ante convallis. Ut suscipit, felis vitae convallis consectetur, ligula lectus ultrices ipsum, et facilisis massa orci vel justo. Nulla volutpat turpis ligula. Aliquam laoreet enim massa, vitae tincidunt turpis semper et. Suspendisse potenti. Donec ut urna sit amet magna suscipit hendrerit. Donec in porttitor massa. Fusce sed arcu eu diam aliquam iaculis vel blandit odio. Nulla vel quam ac erat vulputate rutrum a et nulla. Duis iaculis velit sed dictum iaculis. Phasellus eget lacus facilisis, consequat risus ac, efficitur felis. Duis elementum lectus at mollis pharetra. Aliquam et tortor vitae dui egestas maximus ac eu massa. Integer mattis eleifend sem. Mauris tincidunt lacus eu tellus luctus, a tempus nunc condimentum. In quis mi felis. Suspendisse potenti. Praesent velit sapien, dignissim consectetur viverra eu, faucibus eget sem. Donec hendrerit enim ex, luctus fermentum urna venenatis ut. Mauris efficitur consequat tortor a placerat. Etiam ipsum metus, tincidunt non rutrum eget, pretium sit amet augue. Donec ultrices eget turpis id tempor. Ut at urna ligula. Nam nisi sapien, auctor non mauris eget, vulputate imperdiet neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam rutrum nunc ut nibh accumsan venenatis. Aliquam ligula odio, dapibus imperdiet turpis id, efficitur molestie lorem. Ut suscipit eget lectus commodo sodales. Vivamus laoreet viverra purus. Nullam ut fringilla justo. Praesent venenatis ante ac mollis aliquet. Suspendisse vehicula nec est eget interdum. Praesent euismod placerat lorem, facilisis elementum massa lobortis eleifend. Phasellus viverra pulvinar lectus. Phasellus non posuere lectus, eget semper elit. Quisque eget elementum nisl, eget fermentum erat. Fusce sit amet mollis nibh. Sed eu arcu tempus, pretium diam quis, faucibus justo. Cras a metus quis quam sodales feugiat eget vel erat. Aliquam volutpat lacus ut arcu semper, in laoreet ante dictum. Phasellus sollicitudin mi magna, in scelerisque justo varius ut. Ut facilisis varius lorem vel pulvinar. Ut condimentum lectus et orci tincidunt venenatis. Suspendisse congue felis ut nisl mollis sollicitudin.":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu mi quis erat ullamcorper interdum.</p><p> Curabitur ipsum sapien, elementum a magna placerat, vulputate ornare turpis. Maecenas faucibus suscipit orci, ac porttitor sem venenatis a.</p><p>Etiam sed vulputate ipsum, sit amet vestibulum velit. Donec accumsan dapibus risus sit amet accumsan. Curabitur sed ex maximus, vulputate neque a, suscipit risus. Praesent tristique sem id lacus rhoncus consequat.</p><p>Aenean vel orci nec elit ultrices ultricies. Proin elementum nibh ante, sit amet sollicitudin velit bibendum at. Donec quam augue, dictum sit amet metus vel, tincidunt rutrum nibh. Suspendisse mi ante, scelerisque vitae efficitur non, sollicitudin nec ligula. Vivamus eu neque ultrices, pulvinar odio non, imperdiet magna. Praesent suscipit erat vitae lorem tempor, vitae commodo ante convallis.</p><p>Ut suscipit, felis vitae convallis consectetur, ligula lectus ultrices ipsum, et facilisis massa orci vel justo. Nulla volutpat turpis ligula. Aliquam laoreet enim massa, vitae tincidunt turpis semper et. Suspendisse potenti. Donec ut urna sit amet magna suscipit hendrerit. Donec in porttitor massa. Fusce sed arcu eu diam aliquam iaculis vel blandit odio. Nulla vel quam ac erat vulputate rutrum a et nulla.</p><p>Duis iaculis velit sed dictum iaculis. Phasellus eget lacus facilisis, consequat risus ac, efficitur felis. Duis elementum lectus at mollis pharetra. Aliquam et tortor vitae dui egestas maximus ac eu massa. Integer mattis eleifend sem. Mauris tincidunt lacus eu tellus luctus, a tempus nunc condimentum. In quis mi felis. Suspendisse potenti. Praesent velit sapien, dignissim consectetur viverra eu, faucibus eget sem. Donec hendrerit enim ex, luctus fermentum urna venenatis ut. Mauris efficitur consequat tortor a placerat. Etiam ipsum metus, tincidunt non rutrum eget, pretium sit amet augue. Donec ultrices eget turpis id tempor. Ut at urna ligula. Nam nisi sapien, auctor non mauris eget, vulputate imperdiet neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam rutrum nunc ut nibh accumsan venenatis.</p><p>Aliquam ligula odio, dapibus imperdiet turpis id, efficitur molestie lorem. Ut suscipit eget lectus commodo sodales. Vivamus laoreet viverra purus. Nullam ut fringilla justo. Praesent venenatis ante ac mollis aliquet. Suspendisse vehicula nec est eget interdum. Praesent euismod placerat lorem, facilisis elementum massa lobortis eleifend. Phasellus viverra pulvinar lectus. Phasellus non posuere lectus, eget semper elit. Quisque eget elementum nisl, eget fermentum erat. Fusce sit amet mollis nibh. Sed eu arcu tempus, pretium diam quis, faucibus justo. Cras a metus quis quam sodales feugiat eget vel erat. Aliquam volutpat lacus ut arcu semper, in laoreet ante dictum. Phasellus sollicitudin mi magna, in scelerisque justo varius ut. Ut facilisis varius lorem vel pulvinar.</p><p>Ut condimentum lectus et orci tincidunt venenatis. Suspendisse congue felis ut nisl mollis sollicitudin.</p>";
	}
	public function hora($lenguage='12',$time=null, $timezone = null){
		/*
			Todo: Make it with cakephp class "Time"
		*/
		return null;
		if(!$time)
			$time=CakeTime::convert(time(), $timezone);
		else
		{
			list($Y,$m,$d) = explode('-',substr($time,0,10));
			list($H,$i,$s) = explode(':',substr($time,11,8));
			// I need to modify the timezone var to not be null for Ofizone's
			// comment date aesthetics
			$time = CakeTime::convert(mktime($H,$i,$s,$m,$d,$Y), $timezone);
		}
		if($lenguage=='12')
			$hora=date('g:i A',$time);
		else
			$hora=date('G:i A',$time);
		return $hora;
	}
	public function date($format, $object){
		if(!method_exists($object, 'i18nFormat')) {
			$object = Time::now();
		}
		return $object->i18nFormat($format);
	}
	public function ago($date) {
		/*
			Todo: Make it with cakephp class "Time"
		*/
		return null;
		list($Y,$m,$d) = explode('-',substr($date,0,10));
		list($H,$i,$s) = explode(':',substr($date,11,8));
		$ago = time() - mktime($H,$i,$s,$m,$d,$Y);
		
		if( ($ago)<=60 ){
			$ago = 'hace '.$ago.' '.($ago==1 ? 'segundo':'segundos');
		} else if( ($ago/60)<=60 ){
			$n = (int)($ago/60);
			$ago = 'hace '.$n.' '.($n==1 ? 'minuto':'minutos');
		} else if( ($ago/3600)<=24 ){
			$n = (int)($ago/3600);
			$ago = 'hace '.$n.' '.($n==1 ? 'hora':'horas');
		} else if( ($ago/86400)<=7 ){
			$n = (int)($ago/86400);
			$ago = 'hace '.$n.' '.($n==1 ? 'día':'días');
		} else if( ($ago/604800)<=4 ){
			$n = (int)($ago/604800);
			$ago = 'hace '.$n.' '.($n==1 ? 'semana':'semanas' );
		} else if( ($ago/2419200)<=12 ){
			$n = (int)($ago/2419200);
			$ago = 'hace '.$n.' '.($n==1 ? 'mes':'meses');
		} else {
			$n = (int)($ago/29030400);
			$ago = 'hace '.$n.' '.($n==1 ? 'año':'años');
		}

		return $ago;
	}
	public function money($money, $options=[]) {
		$options = array_merge([
			'before' => '$&nbsp;',
			'precision' => 2,
			'locale' => 'en_US',
			'places' => 2
		],$options);
		return Number::format($money, $options);
	}
	public function byteSize($bytes, $decimals = 2){
		if($bytes >= 1000000000) {
			return number_format($bytes/1000000000, $decimals).'GB';
		} else if($bytes >= 1000000) {
			return number_format($bytes/1000000, $decimals).'MB';
		} else if($bytes >= 1000) {
			return number_format($bytes/1000, $decimals).'KB';
		} else {
			return number_format($bytes, $decimals).'Bytes';
		}
	}
	public function dtFromObject($object, $options = array('inflector' => false,'translate'=>false,'exceptions'=>array())) {
		/*
			Todo: Make it with cakephp class "Time"
		*/
		return null;
		$list="";
		if(is_array($object)){
			$list.="<div class=\"dl-object\">";
			foreach($object as $key => $value) {
				if(!in_array($key, $options['exceptions'])) {
					$key = $options['inflector'] ? Inflector::humanize($key):$key;
					$key = $options['translate'] ? __($key):$key;
					$list.="<div class=\"dl-key\">$key</div><div class=\"dl-value\">".$this->dtFromObject($value, $options)."</div>";	
				}
			}
			$list.="<clear></clear></div>";
		} else {
			$object = $options['inflector'] ? Inflector::humanize($object):$object;
			$object = $options['translate'] ? __($object):$object;
			$object = $options['translate'] ? __($object):$object;
			$list.="<span>$object</span>";
		}
		return $list;
	}
	public function getClosestDate($dates_array = array(), $date = "") {
		/*
			Todo: Make it with cakephp class "Time"
		*/
		return null;
        if(!is_string($date) || strlen($date) < 10 || !strtotime($date)){
            $date = date('Y-m-d H:i:s');
        }
        foreach($dates_array as $day)
        {
            $interval[] = abs(strtotime($date) - strtotime($day));
        }
        asort($interval);
        $closest = key($interval);

        return $dates_array[$closest];
	}
	public function setStyles($object, $includeAttribute = true) {
		$styles = "";
		foreach($object as $pro => $val) {
			$styles.=$pro.":".str_replace("\"", "'", $val).";";
		}
		return $includeAttribute ? "style=\"$styles\"":$styles;
	}
}