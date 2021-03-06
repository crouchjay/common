<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 3/27/2016
 * Time: 10:55 AM
 */

namespace Sports\Sport;

class SportTrackAndField extends AbstractSport {

    private static $NAME = 'TrackAndField';

    private static $instance = null;
    
    public static function getInstance(): SportTrackAndField {
    	if (self::$instance == null) {
    		self::$instance = new SportTrackAndField();
    	}
    	
    	return self::$instance;
    }

    public function getName(): string {
        return self::$NAME;
    }

    public function getLocale(): string {
        return __d('sports', 'sports.track_and_field');
    }
}