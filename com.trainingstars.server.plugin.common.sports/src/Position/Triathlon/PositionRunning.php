<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 4/14/2016
 * Time: 8:13 AM
 */

namespace Sports\Position\Triathlon;


use Sports\Position\IPosition;

class PositionRunning implements IPosition {

    private static $NAME = 'Running';

    public function getName() {
        return self::$NAME;
    }

    public function getLocale() {
        return __d('sports', 'position.triathlon.running');
    }
}