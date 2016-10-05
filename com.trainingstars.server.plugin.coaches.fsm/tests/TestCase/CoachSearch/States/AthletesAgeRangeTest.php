<?php
namespace CoachesFSM\Test\TestCase\CoachSearch\States;

use Cake\TestSuite\TestCase;
use CoachesFSM\CoachesSearch\States\AthletesAgeRange;

class AthletesAgeRangeTest extends TestCase {

	private $state = null;

	public function setUp() {
		parent::setUp();
		$this->state = AthletesAgeRange::getInstance();
	}

	public function tearDown() {
		parent::tearDown();
		unset($this->state);
	}

	public function testGetInitialStateName() {
		$this->assertEquals('AthletesAgeRange', $this->state->getName());
	}
	
	public function testEquals() {
		$this->assertEquals(AthletesAgeRange::getInstance(), $this->state);
	}

	public function testGetStateByNameAthletesAgeRange() {
		$this->assertEquals(AthletesAgeRange::getInstance(), $this->fsm->getStateByName('AthletesAgeRange'));
	}
}