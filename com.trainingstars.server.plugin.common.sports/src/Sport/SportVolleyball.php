<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 3/27/2016
 * Time: 10:55 AM
 */

namespace Sports\Sport;

class SportVolleyball extends AbstractSport {

    private static $NAME = 'Volleyball';

    private static $instance = null;
    
    public static function getInstance(): SportVolleyball {
    	if (self::$instance == null) {
    		self::$instance = new SportVolleyball();
    	}
    	
    	return self::$instance;
    }

    public function getName(): string {
        return self::$NAME;
    }

    public function getLocale(): string {
        return __d('sports', 'sports.volleyball');
    }
}