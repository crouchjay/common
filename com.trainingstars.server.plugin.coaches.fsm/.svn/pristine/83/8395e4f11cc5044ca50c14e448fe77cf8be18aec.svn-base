<?php
namespace FSM\Test\TestCase\FSM;

use Cake\TestSuite\TestCase;
use CoachesFSM\CoachSearch\CoachSearchFSM;
use CoachesFSM\CoachesSearch\States\AthletesAgeRange;

class CoachSearchFSMTest extends TestCase {
	
	private static $INITIAL_STATE_NAME = 'Initial';

	private $fsm = null;
	
	public function setUp() {
		parent::setUp();		
		$this->fsm = CoachSearchFSM::getInstance();
	}
	
	public function tearDown() {
		parent::tearDown();	
		unset($this->fsm);
	}
	
	public function testGetInitialStateName() {
		$this->assertEquals(self::$INITIAL_STATE_NAME, $this->fsm->getInitialStateName());
	}
	
	public function testGetStateByNameAthletesAgeRange() {
		$this->assertEquals(AthletesAgeRange::getInstance(), $this->fsm->getStateByName('AthletesAgeRange'));
	}
}