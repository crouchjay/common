<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 4/14/2016
 * Time: 8:13 AM
 */

namespace Sports\Position\Football;


use Sports\Position\IPosition;

class PositionForward implements IPosition {

    private static $NAME = 'Forward';

    public function getName() {
        return self::$NAME;
    }

    public function getLocale() {
        return __d('sports', 'position.football.forward');
    }
}