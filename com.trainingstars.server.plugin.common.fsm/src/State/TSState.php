<?php

namespace FSM\State;

use Cake\Datasource\EntityInterface;

abstract class TSState implements ITSState {

	private $name = '';
	
	public function __construct($name = '') {
		$this->name = $name;
	}
	
	public function getName(): string {
		return $this->name;
	}
	
	public function equals(ITSState $state): bool {
		$equals = true;
		$equals &= ($this->getName() == $state->getName());
		return $equals;
	}
	
	protected function canTransition(EntityInterface $entity, array $fields = []) {
		$success = true;
	
		foreach ($fields as $field) {
			$success &= $this->fieldIsSet($entity, $field);
		}
	
		return $success;
	}
	
	private function fieldIsSet(EntityInterface $entity, $field = ''): bool {
		return (!is_null($entity) && !empty($entity->get($field)));
	}
}