<?php

namespace CoachesFSM\CoachSearch;

use FSM\FSM\TSFiniteStateMachine;
use FSM\State\ITSState;
use CoachesFSM;
use CoachesFSM\CoachesSearch\States\AthletesAgeRange;

class CoachSearchFSM extends TSFiniteStateMachine {
	
	/** @var ITSState */
	private static $states = [];
	
	private static $instance = null;
	
	public function __construct() {
		parent::__construct(self::getStates(), 'Initial');
	}
	
	public static function getInstance(): CoachSearchFSM {
		if (self::$instance == null) {
			self::$instance = new CoachSearchFSM();
		}
		
		return self::$instance;
	}
	
	private static function setStates() {
		if (empty(self::$states)) {
			self::$states = [
					AthletesAgeRange::getInstance()
			];
		}
	}
	
	private static function getStates(): array {
		if (empty(self::$states)) {
			$this->setStates();
		}
		
		return self::$states;
	}
	
}