<?php

namespace FSM\State;

use Cake\Datasource\EntityInterface;

interface ITSState {
	public function transition(EntityInterface $entity, ITSState $targetState = null): EntityInterface;
	
	public function exitState(EntityInterface $entity): EntityInterface;
	
	public function enterState(EntityInterface $entity): EntityInterface;
	
	public function getName(): string;
}