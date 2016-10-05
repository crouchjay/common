<?php

namespace FSM\FSM;

use Cake\Datasource\EntityInterface;
use FSM\State\ITSState;

class TSFiniteStateMachine {
	
	/** @var ITSState[] */
	private $states = [];
	
	/** @var string */
	private $initialStateName;
	
	public function __construct(array $states = [], $initialStateName = '') {
		$this->initialStateName = $initialStateName;
		
		foreach ($states as $state) {
			if ($state instanceof ITSState) {
				$this->states[] = $state;
			}
		}
	}
	
	public function getStateByName($stateName = ''): ITSState {
		/** var ITSState $state */
		$stateByName = null;
		
		if (!empty($stateName)) {
			foreach ($this->states as $state) {
				if ($state->getName() == $stateName) {
					$stateByName = $state;
					break;
				}
			}
		}
		
		return $stateByName;
	}
	
	public function getInitialStateName(): string {
		return $this->initialStateName;
	}
	
	public function transition(EntityInterface $entity): EntityInterface {
		if (!is_null($entity) && !empty($this->getStateByName($entity))) {
			$currentState = $this->getStateByName($entity);
			$entity = $currentState->transition($entity);
		}
		
		return $entity;		
	}
}