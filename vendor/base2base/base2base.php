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