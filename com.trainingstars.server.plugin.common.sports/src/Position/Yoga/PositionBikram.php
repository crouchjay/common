<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 4/14/2016
 * Time: 8:13 AM
 */

namespace Sports\Position\Yoga;


use Sports\Position\IPosition;

class PositionBikram implements IPosition {

    private static $NAME = 'Bikram';

    public function getName() {
        return self::$NAME;
    }

    public function getLocale() {
        return __d('sports', 'position.yoga.bikram');
    }
}