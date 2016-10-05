<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 3/27/2016
 * Time: 10:55 AM
 */

namespace Sports\Sport;

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

class SportAmericanFootball extends AbstractSport {

    private static $NAME = 'AmericanFootball';

    private static $instance = null;
    
    public static function getInstance(): SportAmericanFootball {
    	if (self::$instance == null) {
    		self::$instance = new SportAmericanFootball();
    	}
    	
    	return self::$instance;
    }
    
    public function getName(): string {
        return self::$NAME;
    }

    public function getLocale(): string {
        return __d('Sports', 'sports.american_football');
    }
    
    protected function getAllPositions(): array {
        if ($this->positions == null) {
        	$this->positions = [
        			PositionDefensiveBack::getInstance(),
        			PositionDefensiveLine::getInstance(),
        			PositionKicker::getInstance(),
        			PositionLinebacker::getInstance(),
        			PositionOffensiveLine::getInstance(),
        			PositionPunter::getInstance(),
        			PositionQuarterback::getInstance(),
        			PositionRunningback::getInstance(),
        			PositionTightEnd::getInstance(),
        			PositionWideReceiver::getInstance()
        	];
        }

        return $this->positions;
    }
}