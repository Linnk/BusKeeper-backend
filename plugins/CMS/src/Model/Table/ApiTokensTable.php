<?php 
	
namespace CMS\Model\Table;

use Cake\Core\Configure;
use Cake\ORM\Table;
use Cake\ORM\Entity;
use Cake\I18n\Time;
use Cake\ORM\TableRegistry;

class ApiTokensTable extends CMSTable
{
	private $connection_limit = 2000;
	
	public function initialize(array $config)
    {
		$this->table("api_tokens");
		$this->addAssociations([
			'belongsTo' => [
				'ApiClients' => [
					'foreignKey' => 'client_id',
					'propertyName' => 'ApiClient'
				]
			]
		]);
    }
    
    public function webToken($query) {
		return Configure::read('debug')>0 && isset($query['access_token']);
    }
    public function accessToken($request) {	    
	    
	    $client_id = $request->header('Client-Id');
	    $device_id = $request->header('Device-Id');
		$client_hash = $request->header('Client-Hash');

	    if($api_client = $this->ApiClients->findByClientId($client_id)->first()) {

			$hash = base64_encode(hash_hmac("md5", $device_id, $api_client->client_secret));
			
			if($hash == $client_hash) {
				$data = [
					'client_id' => $api_client->id, 
					'token' => (new \Cake\Auth\DefaultPasswordHasher())->hash($client_id.time()), 
					'expiration' => Time::now()->modify('+15 days'),
					'created' => Time::now()
				];
				$entity = $this->newEntity($data);
				if($this->save($entity)) {
					return $entity->token;
				}
			}
		}
		return null;
    }
    public function identify($request, &$user=null, &$error=null) {
		$token = $request->header('Access-Token');
		$data = $request->data();
		if($this->webToken($request->query)) {
			$token = $request->query['Access-Token'];
		}
	    //if(hash_hmac("md5", $this->data['message'], SECRET_KEY_IPHONE) == base64_decode($this->data['hash']))
	    
		if($api_token = $this->findByToken($token)->contain(['ApiClients'])->first()) {
			if($api_token->expiration->toUnixString() > Time::now()->toUnixString() && $api_token->connections < $this->connection_limit) {
				$api_token->connections++;
				
				$user_id = $api_token->ApiClient->user_id;
				if($user = TableRegistry::get('Users')->find()->where(['Users.id' => $user_id,'Users.active'=> 1])->first()->toArray()) {
					$user['password'] = "it's secret";
					if(isset($data['deviceToken'])) {
						$device = ["device_token" => $data['deviceToken']];
						if(isset($data['deviceName'])) {
							$device["device_name"] = $data['deviceName'];
						}
						if(isset($data['deviceType'])) {
							$device["device_type"] = $data['deviceType'];
						}
						$device['user_id'] = $user_id;
						$device['client_id'] = $api_token->ApiClient->id;
						$this->registerDevice($device);
					}
					$this->save($api_token);
					return true;
				} else {
					$error = "User is not active now";
				}
			} else {
				$error = "Token has expired";
			}
	    } else {
		    $error = "No token founded";
	    }
	    return false;
    }
    public function registerDevice($device) {
	    $Devices = TableRegistry::get("Devices");
		
		$entity = $Devices->find()->where(["device_token LIKE" => $device["device_token"]])->first();
		
		if($entity) {
			$Devices->patchEntity($entity, $device);
		} else {
			$entity = $Devices->newEntity($device);	
		}
		return $Devices->save($entity);
    }
}