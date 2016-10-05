<?php

namespace Sports\Test\TestCase\Sport;

use Cake\TestSuite\TestCase;
use Sports\Sport\SportAmericanFootball;
use Sports\Position\AmericanFootball\PositionDefensiveBack;
use Sports\Position\AmericanFootball\PositionDefensiveLine;
use Sports\Position\AmericanFootball\PositionKicker;
use Sports\Position\AmericanFootball\PositionLinebacker;
use Sports\Position\AmericanFootball\PositionOffensiveLine;
use Sports\Position\AmericanFootball\PositionPunter;
use Sports\Position\AmericanFootball\PositionQuarterback;
use Sports\Position\AmericanFootball\PositionRunningback;
use Sports\Position\AmericanFootball\PositionTightEnd;
use Sports\Position\AmericanFootball\PositionWideReceiver;

class SportAmericanFootballTest extends TestCase {
	
	public function setUp() {
		parent::setUp();
	}
	
	public function tearDown() {
		parent::tearDown();
	}
	
	public function testGetInstance() {
		$sports = SportAmericanFootball::getInstance();
		$this->assertTrue(($sports instanceof SportAmericanFootball));
	}
	
	public function testGetName() {
		$this->assertTrue(SportAmericanFootball::getInstance()->getName() == 'AmericanFootball');
	}
	
	public function testGetAllPositions() {
		$expectedPositions = [
				PositionDefensiveBack::getInstance()->getName() => PositionDefensiveBack::getInstance()->getLocale(),
				PositionDefensiveLine::getInstance()->getName() => PositionDefensiveLine::getInstance()->getLocale(),
				PositionKicker::getInstance()->getName() => PositionKicker::getInstance()->getLocale(),
				PositionLinebacker::getInstance()->getName() => PositionLinebacker::getInstance()->getLocale(),
				PositionOffensiveLine::getInstance()->getName() => PositionOffensiveLine::getInstance()->getLocale(),
				PositionPunter::getInstance()->getName() => PositionPunter::getInstance()->getLocale(),
				PositionQuarterback::getInstance()->getName() => PositionQuarterback::getInstance()->getLocale(),
				PositionRunningback::getInstance()->getName() => PositionRunningback::getInstance()->getLocale(),
				PositionTightEnd::getInstance()->getName() => PositionTightEnd::getInstance()->getLocale(),
				PositionWideReceiver::getInstance()->getName() => PositionWideReceiver::getInstance()->getLocale()
		];
		
		$actualPositions = SportAmericanFootball::getInstance()->getPositionsForGuiSelection();
		
		$missingExpectedPositions = array_diff($expectedPositions, $actualPositions);
		
		$missingActualPositions = array_diff($actualPositions, $expectedPositions);

		$this->assertTrue(empty($missingExpectedPositions));
		$this->assertTrue(empty($missingActualPositions));
	}
	
	public function testContains() {
		$result = SportAmericanFootball::getInstance()->contains('DefensiveBack');
		$this->assertTrue($result);
	}
	
	public function testContainsNotExpectedToContain() {
		$result = SportAmericanFootball::getInstance()->contains('Lizards');
		$this->assertFalse($result);
		$result = SportAmericanFootball::getInstance()->contains('');
		$this->assertFalse($result);
	}
	
}