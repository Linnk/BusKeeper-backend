<?php
	
namespace CMS\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Entity;
use Cake\Event\Event;
use Cake\Datasource\EntityInterface;
use Cake\Routing\Router;
use MediaUploader;
use ArrayObject;

class MediaBehavior extends Behavior
{
	public $fields = [];
	public $MediaUploaderOptions = [
		'hash_name' => true,
		'media_types' => array('*'),
		'max_filesize' => 20971520,//20MB
		'dir' => 'files',
		'webroot' => '/',
		'save_fields' => [
			'dir' => 'dir',
			'width' => 'width',
			'height' => 'height',
			'type' => 'type',
			'link' => 'link'
		],
		'slug_url' => false,
		'slug_replace' => '-',
		'resizes' =>[					
			'thumb.small.' => array('width' => 400),
			'thumb.medium.' => array('width' => 600),
			'thumb.large.' => array('width' => 900)
		],
		'blendWith' => false
	];
	public function initialize(array $config)
	{
		require_once(ROOT.DS.'vendor'.DS.'mediauploader'.DS.'MediaUploader.php');
		foreach($config as $key => $options) {
			if(is_array($options)) {
				$this->fields[$key] = array_merge($this->MediaUploaderOptions, $options);
				$this->fields[$key]['webroot'] = DS.$this->fields[$key]['dir'].DS;
				$this->fields[$key]['dir'] = WWW_ROOT.$this->fields[$key]['dir'].DS;
			} else {
				$this->fields[$key] = $this->MediaUploaderOptions;
			}
		}
	}
	public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options)
    {
		foreach($this->fields as $field => $config) {
			$oldfiles = null;
			$Mediauplaoder = new Mediauploader($config);
			if(isset($data[$field])) {
				$file = $data[$field];
				if(is_array($file)) {
					$data[$field] = "";
					if($config['hash_name']) {
						$pathinfo = array_merge(['basename'=>'','filename'=>'','dirname'=>'','extension'=>''],pathinfo($file['name']));
						$file['name'] = timehash().".".$pathinfo['extension'];
					}

					$files = array("$field" => $file);
		
					foreach($Mediauplaoder->save($files) as $name => $file) {
						if($file['error'] === 0) {
							$file['link'] = Router::url($config['webroot'].$file['filename'], true);
							$data['dir'] = $config['webroot'];
							$data[$field] = $config['webroot'].$file['filename'];
							foreach($config['save_fields'] as $property => $save_field) {
								if(isset($file[$property])){
									$data[$save_field] = $file[$property];
								}
							}
							if(isset($data['id'])) {
								$oldfiles[] = $event->subject()->get($data['id'])->$field;	
							}
						} else {
							$data['mediaErrors'][$field] = $file['errors'];
						}
						
					}	
				}
				if($file=="" && isset($data['id'])) {
					$oldfiles[] = $event->subject()->get($data['id'])->$field;
				}
			}
			if($oldfiles) {
				foreach($oldfiles as $oldfile) {
					$Mediauplaoder->deleteMediaFile(basename($oldfile));	
				}
			}
		}
    }
    public function beforeSave(Event $event, EntityInterface $entity)
    {
    }
    public function afterSaveCommit(Event $event, EntityInterface $entity, ArrayObject $options)
    {
	    if($entity->mediaErrors) {
		    foreach($entity->mediaErrors as $field => $errors) {
				$entity->errors($field, $errors);
		    }
	    }
    }
}
if(!function_exists('convBase')){
	function convBase($numberInput, $fromBaseInput, $toBaseInput)
	{
	    if ($fromBaseInput==$toBaseInput) return $numberInput;
	    
	    $fromBase = str_split($fromBaseInput,1);
	    $toBase = str_split($toBaseInput,1);
	    $number = str_split($numberInput,1);
	    $fromLen=strlen($fromBaseInput);
	    $toLen=strlen($toBaseInput);
	    $numberLen=strlen($numberInput);
	    $retval='';
		$base10='';
		
	    if ($toBaseInput == '0123456789') {
	        $retval=0;
	        for ($i = 1;$i <= $numberLen; $i++) {
		        $retval = bcadd($retval, bcmul(array_search($number[$i-1], $fromBase),bcpow($fromLen,$numberLen-$i)));
	        }
	        return $retval;
	    }
	    if ($fromBaseInput != '0123456789') {
	        $base10 = convBase($numberInput, $fromBaseInput, '0123456789');
	    } else {
	        $base10 = $numberInput;
		}
	    if ($base10<strlen($toBaseInput)) {
	        return $toBase[$base10];
	    }
	    while($base10 != '0') {
	        $retval = $toBase[bcmod($base10,$toLen)].$retval;
	        $base10 = bcdiv($base10,$toLen,0);
	    }
	    return $retval;
	}
}
if(!function_exists('timehash')){
	function timehash($using_chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789")
	{
	    $timestamp = microtime();
		$secs = substr($timestamp, 11);
		$milsecs = strrev(substr($timestamp, 2, 6));
		$hashtime = "";
		for($i=0;$i<strlen($secs);$i++) {
			$hashtime.=(isset($milsecs[$i]) ? $milsecs[$i]:"").$secs[$i];
		}
		return convBase($hashtime,"0123456789", $using_chars);
	}
}