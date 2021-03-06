<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 4/14/2016
 * Time: 8:13 AM
 */

namespace Sports\Position\MartialArts;


use Sports\Position\IPosition;

class PositionKickboxing implements IPosition {

    private static $NAME = 'Kickboxing';

    public function getName() {
        return self::$NAME;
    }

    public function getLocale() {
        return __d('sports', 'position.martial_arts.kickboxing');
    }
}