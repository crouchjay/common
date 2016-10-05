<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 4/14/2016
 * Time: 8:13 AM
 */

namespace Sports\Position\AmericanFootball;


use Sports\Position\IPosition;

class PositionDefensiveLine implements IPosition {

    private static $NAME = 'DefensiveLine';

    private static $instance = null;
    
    public static function getInstance(): PositionDefensiveLine {
    	if (self::$instance == null) {
    		self::$instance = new PositionDefensiveLine();
    	}
    	return self::$instance;
    }

    public function getName() {
        return self::$NAME;
    }

    public function getLocale() {
        return __d('sports', 'position.american_football.defensive_line');
    }
}