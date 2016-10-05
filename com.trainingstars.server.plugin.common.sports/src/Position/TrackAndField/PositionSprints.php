<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 4/14/2016
 * Time: 8:13 AM
 */

namespace Sports\Position\TrackAndField;


use Sports\Position\IPosition;

class PositionSprints implements IPosition {

    private static $NAME = 'Sprints';

    public function getName() {
        return self::$NAME;
    }

    public function getLocale() {
        return __d('sports', 'position.track_and_field.sprints');
    }
}