<?php

namespace FSM\Transition;

use Cake\Datasource\EntityInterface;
use FSM\State\ITSState;

class TSTransition {
	
	public static function transition(EntityInterface &$entity, ITSStatetate $origin, ITSState $target) {
		$origin->exitState($entity);
		$target->enterState($entity);
    }
}