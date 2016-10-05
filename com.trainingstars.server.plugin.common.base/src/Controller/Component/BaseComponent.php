<?php

namespace Base\Controller\Component;

use Cake\Controller\Component;
use Cake\Datasource\EntityInterface;
use Cake\Controller\Controller;
use Cake\Log\Log;

class BaseComponent extends Component {
	
	private static $POST = 'post';
	
	private static $PUT = 'put';
	
	private static $ID = 'id';
	
	public function requestIsAPostOrPutRequest(): bool {
		return $this->requestIs([self::$POST, self::$PUT]);
	}
	
    public function requestIs(array $type): bool {
    	if (empty($type)) {
    		Log::debug("The request type array cannot be empty.");
    		return false;
    	}
    	
    	$result = $this->getController()->request->is($type);
    	
    	if (is_null($result)) {
    		Log::warning("The request object returned a null value for on the is method.");
    		$result = false;
    	}
    	
    	return $result;
    }
    
    public function requestIdIsSet(): bool {
    	return isset($this->getController()->request->data[self::$ID]);
    }
    
    public function entityExistsWithoutErrorsAndIsDirty(EntityInterface $entity): bool {
    	return ($this->entityExistsWithoutErrors($entity) && ($entity->dirty()));
    }
    
    public function entityIsSuccessfullySaved(EntityInterface $entity): bool {
    	return $this->entityExistsWithoutErrors($entity);
    }
    
    private function entityExistsWithoutErrors(EntityInterface $entity): bool {
    	return (($entity) && (!$entity->errors()));
    }
    
    private function getController(): Controller {
    	return $this->_registry->getController();
    }
}