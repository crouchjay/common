<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 3/27/2016
 * Time: 10:55 AM
 */

namespace Sports\Sport;

class SportStrengthAndConditioning extends AbstractSport {

    private static $NAME = 'StrengthAndConditioning';

    private static $instance = null;
    
    public static function getInstance(): SportStrengthAndConditioning {
    	if (self::$instance == null) {
    		self::$instance = new SportStrengthAndConditioning();
    	}
    	
    	return self::$instance;
    }

    public function getName(): string {
        return self::$NAME;
    }

    public function getLocale(): string {
        return __d('sports', 'sports.strength_and_conditioning');
    }
}