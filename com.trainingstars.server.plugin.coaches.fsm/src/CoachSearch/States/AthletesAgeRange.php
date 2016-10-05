<?php

namespace CoachesFSM\CoachesSearch\States;

use FSM\State\TSState;

class AthletesAgeRange extends TSState {
	
	private static $NAME = 'AthletesAgeRange';
	
	/** var AthletesAgeRange */
	private static $instance = null;
	
	public function __construct() {
		parent::__construct(self::$NAME);
	}
	
	public static function getInstance(): AthletesAgeRange {
		if (self::$instance == null) {
			self::$instance = new AthletesAgeRange();
		}
	
		return self::$instance;
	}
}