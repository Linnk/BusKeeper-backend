<?php
if (!function_exists('base2base')) {
    define("B2B_NUMBERS", "0123456789");
    define("B2B_HEX", "0123456789ABCDEF");
    define("B2B_ALPHALOWER", "abcdefghijklmnopqrstuvwxyz");
    define("B2B_ALPHAUPPER", "ABCDEFGHIJKLMNOPQRSTUVWXYZ");
    define("B2B_ALPHANUM", "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");
    function base2base($in = "", $inBase = B2B_NUMBERS, $outBase = B2B_ALPHANUM)
    {
        $out = "";
        $in .= "";
        $inBase .= "";
        $outBase .= "";
        
        $splitregex = '/(?<=,|^)([^,]*)(,\1)+(?=,|$)/';
        
        $inCharset = array_reverse(preg_split('//', preg_replace($splitregex, '', $in), -1, PREG_SPLIT_NO_EMPTY));
        $inLenght  = count($inCharset);
        
        $inBaseCharset = array_flip(array_values(array_unique(preg_split('//', preg_replace($splitregex, '', $inBase), -1, PREG_SPLIT_NO_EMPTY))));
        $inBaseLenght  = count($inBaseCharset);
        
        $outBaseCharset = array_values(array_unique(preg_split('//', preg_replace($splitregex, '', $outBase), -1, PREG_SPLIT_NO_EMPTY)));
        $outBaseLenght  = count($outBaseCharset);
        
        $inValue = 0;
        foreach ($inCharset as $n => $c) {
            $value = $inBaseCharset[$c] * bcpow($inBaseLenght, $n);
            $inValue += $value;
        }
        $out = $inValue > 0 ? "" : substr($outBase, 0, 1);
        if ($outBaseLenght > 1) {
            while ($inValue) {
                $r       = $inValue % $outBaseLenght;
                $out     = $outBaseCharset[$r] . $out;
                $inValue = floor($inValue / $outBaseLenght);
            }
        }
        return $out;
    }
}
if(!function_exists('timehash')){
	function timehash($using_chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789", $offset = 0)
	{
	    $timestamp = microtime();
		$secs = "".((substr($timestamp, 11)) - $offset);
		$milsecs = "".strrev(substr($timestamp, 2, 6));
		
		$hashtime = "";
		for($i=0;$i<strlen($secs);$i++) {
			$hashtime.=(isset($milsecs[$i]) ? $milsecs[$i]:"").$secs[$i];
		}
		return base2base($hashtime,"0123456789", $using_chars);
	}
}
if(!function_exists('humanize')) {
	function humanize($msg) {
		return \Cake\Utility\Inflector::humanize($msg);
	}	
}
if(!function_exists('translate')) {
	function translate($msg, $vars = []){
		$msg = "$msg";
		if($msg=="0") {
			return "0";
		}
		return __($msg, $vars);
	}	
}
if(!function_exists('msg')) {
	function msg($msg, $vars = [], $translate = true){
		echo h($translate ? translate($msg, $vars) : $msg);
	}
}