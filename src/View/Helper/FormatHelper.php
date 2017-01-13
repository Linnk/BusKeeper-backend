<?php

namespace App\View\Helper;

use Cake\View\Helper\HtmlHelper;
use Cake\I18n\Number;
use Cake\I18n\Time;
use Cake\I18n\I18n;

class FormatHelper extends HtmlHelper {
	
	public function meters($meters)
	{
		return number_format((double) $meters, 1,'.',',').' m';
	}
	public function kmh($meters_per_second, $unit = ' km/h')
	{
		return number_format((((double) $meters_per_second * 3600) / 1000), 1,'.',',').$unit;
	}
	public function timeOnly($time, $options = array())
	{
		if(!$time)
			return '';

		$today_format = "HH:mm";
		
		$default_options = array(
			'data-toggle' => 'tooltip',
			'data-placement' => 'left',
			'title' => $time->nice()
		);
		$options = array_merge($default_options, $options);
		return $this->tag('span', $time->i18nFormat($today_format), $options);
	}
	public function shortDate($time, $options = array())
	{
		if(!$time)
			return '';

		$today_format = "d MMMM Y";
		
		$default_options = array(
			'data-toggle' => 'tooltip',
			'data-placement' => 'left',
			'title' => $time->nice()
		);
		$options = array_merge($default_options, $options);
		return $this->tag('span', $time->i18nFormat($today_format), $options);
	}
	public function fullDate($fulldate, $options = array())
	{
		if(!$fulldate)
			return '';

		App::uses('CakeTime', 'Utility');
		
		$today_format = __('h:i A F jS, Y');
		
		$default_options = array(
			'class' => 'enable-tooltip',
			'rel' => 'tooltip',
			'data-placement' => 'left',
			'data-original-title' => $fulldate
		);
		
		$options = array_merge($default_options, $options);
		
		return $this->tag('span', CakeTime::format($today_format, $fulldate), $options);
	}
	public function overspeeding($overspeeding)
	{
		return $overspeeding==1 ? 'Una vez' : $overspeeding.' veces';
	}
	public function timer($interval)
	{
		$seconds = floor($interval % 60);
		$minutes = ($interval / 60) % 60;
		$hours = ($interval / 3600);

		return sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);
	}
	public function rate($rate)
	{
		if($rate < 1 || $rate > 5)
			return '';

		for($html='', $n=1; $n<=5; $n++)
		{
			if($n <= $rate)
				$html .= '<span class="glyphicon glyphicon-star"></span>';
			else
				$html .= '<span class="glyphicon glyphicon-star-empty"></span>';
		}
		return $html;
	}
}
