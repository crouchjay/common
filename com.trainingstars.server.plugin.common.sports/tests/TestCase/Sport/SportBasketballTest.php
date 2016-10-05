<?php

namespace Sports\Test\TestCase\Sport;

use Cake\TestSuite\TestCase;
use Sports\Position\Basketball\PositionCenter;
use Sports\Position\Basketball\PositionForward;
use Sports\Position\Basketball\PositionGuard;
use Sports\Sport\SportBasketball;

class SportBasketballTest extends TestCase {
	
	public function setUp() {
		parent::setUp();
	}
	
	public function tearDown() {
		parent::tearDown();
	}
	
	public function testGetInstance() {
		$sports = SportBasketball::getInstance();
		$this->assertTrue(($sports instanceof SportBasketball));
	}
	
	public function testGetName() {
		$this->assertTrue(SportBasketball::getInstance()->getName() == 'Basketball');
	}
	
	public function testGetAllPositions() {
		$expectedPositions = [
				PositionCenter::getInstance()->getName() => PositionCenter::getInstance()->getLocale(),
				PositionForward::getInstance()->getName() => PositionForward::getInstance()->getLocale(),
				PositionGuard::getInstance()->getName() => PositionGuard::getInstance()->getLocale()
		];
		
		$actualPositions = SportBasketball::getInstance()->getPositionsForGuiSelection();
		
		$missingExpectedPositions = array_diff($expectedPositions, $actualPositions);
		
		$missingActualPositions = array_diff($actualPositions, $expectedPositions);

		$this->assertTrue(empty($missingExpectedPositions));
		$this->assertTrue(empty($missingActualPositions));
	}
	
	public function testContains() {
		$result = SportBasketball::getInstance()->contains('Forward');
		$this->assertTrue($result);
	}
	
	public function testContainsNotExpectedToContain() {
		$result = SportBasketball::getInstance()->contains('Lizards');
		$this->assertFalse($result);
		$result = SportBasketball::getInstance()->contains('');
		$this->assertFalse($result);
	}
	
}