<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 3/27/2016
 * Time: 10:55 AM
 */

namespace Sports\Sport;

class SportFootball extends AbstractSport {

    private static $NAME = 'Football';

    private static $instance = null;
    
    public static function getInstance(): SportFootball {
    	if (self::$instance == null) {
    		self::$instance = new SportFootball();
    	}
    	
    	return self::$instance;
    }

    public function getName(): string {
        return self::$NAME;
    }

    public function getLocale(): string {
        return __d('sports', 'sports.football');
    }
}