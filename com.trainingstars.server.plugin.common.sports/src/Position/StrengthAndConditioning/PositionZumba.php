<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 4/14/2016
 * Time: 8:13 AM
 */

namespace Sports\Position\StrengthAndConditioning;


use Sports\Position\IPosition;

class PositionZumba implements IPosition {

    private static $NAME = 'Zumba';

    public function getName() {
        return self::$NAME;
    }

    public function getLocale() {
        return __d('sports', 'position.strength_and_conditioning.zumba');
    }
}