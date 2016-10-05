<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 4/14/2016
 * Time: 8:13 AM
 */

namespace Sports\Position\Basketball;


use Sports\Position\IPosition;

class PositionGuard implements IPosition {

    private static $NAME = 'Guard';

    private static $instance = null;
    
    public static function getInstance(): PositionGuard {
    	if (self::$instance == null) {
    		self::$instance = new PositionGuard();
    	}
    	return self::$instance;
    }

    public function getName() {
        return self::$NAME;
    }

    public function getLocale() {
        return __d('sports', 'position.basketball.guard');
    }
}