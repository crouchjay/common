<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 4/14/2016
 * Time: 8:13 AM
 */

namespace Sports\Position\Basketball;


use Sports\Position\IPosition;

class PositionCenter implements IPosition {

    private static $NAME = 'Center';

    private static $instance = null;
    
    public static function getInstance(): PositionCenter {
    	if (self::$instance == null) {
    		self::$instance = new PositionCenter();
    	}
    	return self::$instance;
    }

    public function getName() {
        return self::$NAME;
    }

    public function getLocale() {
        return __d('sports', 'position.basketball.center');
    }
}