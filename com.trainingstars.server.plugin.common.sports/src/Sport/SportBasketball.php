<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 3/27/2016
 * Time: 10:55 AM
 */

namespace Sports\Sport;

use Sports\Position\Basketball\PositionCenter;
use Sports\Position\Basketball\PositionForward;
use Sports\Position\Basketball\PositionGuard;

class SportBasketball extends AbstractSport {

    private static $NAME = 'Basketball';

    private static $instance = null;
    
    public static function getInstance(): SportBasketball {
    	if (self::$instance == null) {
    		self::$instance = new SportBasketball();
    	}
    	
    	return self::$instance;
    }

    public function getName(): string {
        return self::$NAME;
    }

    public function getLocale(): string {
        return __d('sports', 'sports.basketball');
    }
    
    protected function getAllPositions(): array {
        if ($this->positions == null) {
        	$this->positions = [
        			PositionCenter::getInstance(),
        			PositionForward::getInstance(),
        			PositionGuard::getInstance()
        	];
        }

        return $this->positions;
    }
}