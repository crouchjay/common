<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 4/14/2016
 * Time: 8:13 AM
 */

namespace Sports\Position\TrackAndField;


use Sports\Position\IPosition;

class PositionMarathon implements IPosition {

    private static $NAME = 'Marathon';

    public function getName() {
        return self::$NAME;
    }

    public function getLocale() {
        return __d('sports', 'position.track_and_field.marathon');
    }
}