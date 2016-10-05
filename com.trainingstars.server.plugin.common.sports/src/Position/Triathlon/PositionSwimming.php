<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 4/14/2016
 * Time: 8:13 AM
 */

namespace Sports\Position\Triathlon;


use Sports\Position\IPosition;

class PositionSwimming implements IPosition {

    private static $NAME = 'Swimming';

    public function getName() {
        return self::$NAME;
    }

    public function getLocale() {
        return __d('sports', 'position.triathlon.swimming');
    }
}