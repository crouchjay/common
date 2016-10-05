<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 4/14/2016
 * Time: 8:13 AM
 */

namespace Sports\Position\Football;


use Sports\Position\IPosition;

class PositionGoalKeeper implements IPosition {

    private static $NAME = 'GoalKeeper';

    public function getName() {
        return self::$NAME;
    }

    public function getLocale() {
        return __d('sports', 'position.football.goal_keeper');
    }
}