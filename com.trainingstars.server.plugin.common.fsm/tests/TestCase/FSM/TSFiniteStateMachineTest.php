<?php
namespace FSM\Test\TestCase\FSM;

use Cake\TestSuite\TestCase;
use FSM\FSM\TSFiniteStateMachine;
use FSM\State\ITSState;
use FSM\Test\TestCase\FSM\TestObject\State;

class TSFiniteStateMachineTest extends TestCase {
	
	private static $INITIAL_STATE_NAME = 'Initial';
	
	private $fsm = null;
	
	private $state = null;
	
	public function setUp() {
		parent::setUp();
	
		$this->state = new State();
		
		$this->fsm = new TSFiniteStateMachine([$this->state], self::$INITIAL_STATE_NAME);
	}
	
	public function tearDown() {
		parent::tearDown();
	
		unset($this->fsm);
	}
	
	public function testGetInitialStateName() {
		$this->assertEquals(self::$INITIAL_STATE_NAME, $this->fsm->getInitialStateName());
	}
	
	public function testGetStateByName() {
		
		$state = $this->fsm->getStateByName('State');
		
		$this->assertTrue(($state instanceof ITSState));
	}
	
	/**
	 * @expectedException TypeError
	 */
	public function testGetStateByNameWithNull() {
		$state = $this->fsm->getStateByName(null);
	}
	
	/**
	 * @expectedException TypeError
	 */	
	public function testGetStateByNameWithEmpty() {
		$state = $this->fsm->getStateByName('');
	}
	
	/**
	 * @expectedException TypeError
	 */	
	public function testGetStateByNameStateDoesNotExist() {
		$state = $this->fsm->getStateByName('DifferentState');
	}
}