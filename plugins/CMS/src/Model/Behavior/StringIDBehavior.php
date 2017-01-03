<?php
	
namespace CMS\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\Event\Event;
use Cake\Datasource\EntityInterface;

class StringIDBehavior extends Behavior
{
	public static $B2B_NUMBERS = "0123456789";
	public static $B2B_HEX = "0123456789ABCDEF";
	public static $B2B_ALPHALOWER = "abcdefghijklmnopqrstuvwxyz";
	public static $B2B_ALPHAUPPER = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	public static $B2B_ALPHANUM = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    
	public $fields = [];
	public $defaultOptions = [
		'charset' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',
		'copy' => null
	];
	
	public function initialize(array $config)
	{
		if(count($config) > 0) {
			foreach($config as $key => $options) {
				if(is_array($options)) {
					$this->fields[$key] = $options;
				} else {
					$this->fields[$options] = $this->defaultOptions;
				}
			}
		} else {
			$this->fields['sid'] = $this->defaultOptions;
		}
	}
	public function beforeSave(Event $event, EntityInterface $entity)
    {
		if($entity->isNew()) {			
		    foreach($this->fields as $field => $options) {
				$entity->{$field} = self::timehash($options['charset'], 1478000000);
				if($options['copy']) {
					$entity->{$options['copy']} = $entity->{$field};
				}
		    }	
		}
    }
    public static function timehash($using_chars = null, $offset = 0)
	{
		if($using_chars === null) {
			$using_chars = self::$B2B_ALPHANUM;
		}
	    $timestamp	= microtime();
		$secs		= "".((substr($timestamp, 11)) - $offset);
		$milsecs 	= "".strrev(substr($timestamp, 2, 6));
		$secslen 	= strlen($secs);
		$hashtime	= "";
		
		for($i = 0; $i < $secslen; $i++) {
			$hashtime .= (isset($milsecs[$i]) ? $milsecs[$i]:"").$secs[$i];
		}
		return self::base2base($hashtime, self::$B2B_NUMBERS, $using_chars);
	}
    public static function base2base($in, $inBase = null, $outBase = null)
    {
        $out = "";
		$inValue = 0;
        
        if($inBase === null) {
	        $inBase = self::$B2B_NUMBERS;
        }
        
        if($outBase === null) {
	        $outBase = self::$B2B_ALPHANUM;
        }
        
        $splitregex = '/(?<=,|^)([^,]*)(,\1)+(?=,|$)/';
        
        $inCharset = array_reverse(preg_split('//', preg_replace($splitregex, '', $in), -1, PREG_SPLIT_NO_EMPTY));
        
        $inBaseCharset = array_flip(array_values(array_unique(preg_split('//', preg_replace($splitregex, '', $inBase), -1, PREG_SPLIT_NO_EMPTY))));
        $inBaseLenght  = count($inBaseCharset);
        
        $outBaseCharset = array_values(array_unique(preg_split('//', preg_replace($splitregex, '', $outBase), -1, PREG_SPLIT_NO_EMPTY)));
        $outBaseLenght  = count($outBaseCharset);
        
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