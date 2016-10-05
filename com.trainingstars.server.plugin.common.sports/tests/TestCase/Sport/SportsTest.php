<?php

namespace Sports\Test\TestCase\Sport;

use Cake\TestSuite\TestCase;
use Sports\Sport\Sports;
use Sports\Sport\SportAmericanFootball;
use Sports\Sport\SportBasketball;
use Sports\Sport\SportFootball;
use Sports\Sport\SportMartialArts;
use Sports\Sport\SportStrengthAndConditioning;
use Sports\Sport\SportTrackAndField;
use Sports\Sport\SportTriathlon;
use Sports\Sport\SportVolleyball;
use Sports\Sport\SportYoga;

class SportsTest extends TestCase {
	
	/** @var Sports */
	private $sports;
	
	public function setUp() {
		parent::setUp();
		$this->sports = Sports::getInstance();
	}
	
	public function tearDown() {
		parent::tearDown();
	
		unset($this->sports);
	}
	
	public function testGetInstance() {
		$sports = Sports::getInstance();
		$this->assertTrue(($sports instanceof Sports), "Static getter method does not return the expected object.");
	}
	
	public function testGetSportsForGuiSelectionEnglish() {
		$expectSports = [
				SportAmericanFootball::getInstance()->getLocale(),
				SportBasketball::getInstance()->getLocale(),
				SportFootball::getInstance()->getLocale(),
				SportMartialArts::getInstance()->getLocale(),
				SportStrengthAndConditioning::getInstance()->getLocale(),
				SportTrackAndField::getInstance()->getLocale(),
				SportTriathlon::getInstance()->getLocale(),
				SportVolleyball::getInstance()->getLocale(),
				SportYoga::getInstance()->getLocale()
		];
		
		$sportNames = $this->sports->getSportsForGuiSelection();
		
		$missingExpectedSports = array_diff($expectedSports, $sportNames);
		
		$additionalNames = array_diff($sportNames, $expectSports);
		
		$this->assertTrue(empty($missingExpectedSports));
		$this->assertTrue(empty($additionalNames));
	}
	
	public function testContains() {
		$result = $this->sports->contains('Basketball');
		$this->assertTrue($result);
	}
	
	public function testContainsNotExpectedToContain() {
		$result = $this->sports->contains('Lizards');
		$this->assertFalse($result);
		$result = $this->sports->contains('');
		$this->assertFalse($result);
		$result = $this->sports->contains(null);
		$this->assertFalse($result);
	}
}