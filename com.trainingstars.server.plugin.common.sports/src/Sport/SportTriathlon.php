<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 3/27/2016
 * Time: 10:55 AM
 */

namespace Sports\Sport;

class SportTriathlon extends AbstractSport {

    private static $NAME = 'Triathlon';

    private static $instance = null;
    
    public static function getInstance(): SportTriathlon {
    	if (self::$instance == null) {
    		self::$instance = new SportTriathlon();
    	}
    	
    	return self::$instance;
    }

    public function getName(): string {
        return self::$NAME;
    }

    public function getLocale(): string {
        return __d('sports', 'sports.triathlon');
    }
}