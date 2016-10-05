<?php
namespace FSM\Test\TestCase\FSM\TestObject;

use FSM\State\TSState;
use Cake\Datasource\EntityInterface;
use FSM\State\ITSState;

class State extends TSState {
	
	public function __construct() {
		parent::__construct('State');
	}
	
	public function transition(EntityInterface $entity, ITSState $targetState = null): EntityInterface {
		return null;
	}
	
	public function exitState(EntityInterface $entity): EntityInterface {
		return null;
	}
	
	public function enterState(EntityInterface $entity): EntityInterface {
		return null;
	}
}