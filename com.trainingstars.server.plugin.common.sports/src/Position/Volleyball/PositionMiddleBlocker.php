<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 4/14/2016
 * Time: 8:13 AM
 */

namespace Sports\Position\Volleyball;


use Sports\Position\IPosition;

class PositionMiddleBlocker implements IPosition {

    private static $NAME = 'MiddleBlocker';

    public function getName() {
        return self::$NAME;
    }

    public function getLocale() {
        return __d('sports', 'position.volleyball.middle_blocker');
    }
}