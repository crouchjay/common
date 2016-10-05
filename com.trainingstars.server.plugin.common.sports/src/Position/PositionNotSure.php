<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 4/14/2016
 * Time: 8:10 AM
 */

namespace Sports\Position;


class PositionNotSure implements IPosition {

    private static $NAME = 'NotSure';

    public function getName() {
        return self::$NAME;
    }

    public function getLocale() {
        return __d('sports', 'position.not_sure');
    }
}