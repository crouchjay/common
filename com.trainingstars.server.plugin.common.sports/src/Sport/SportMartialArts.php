<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 3/27/2016
 * Time: 10:55 AM
 */

namespace Sports\Sport;

class SportMartialArts extends AbstractSport {

    private static $NAME = 'MartialArts';

    private static $instance = null;
    
    public static function getInstance(): SportMartialArts {
    	if (self::$instance == null) {
    		self::$instance = new SportMartialArts();
    	}
    	
    	return self::$instance;
    }

    public function getName(): string {
        return self::$NAME;
    }

    public function getLocale(): string {
        return __d('sports', 'sports.martial_arts');
    }
}