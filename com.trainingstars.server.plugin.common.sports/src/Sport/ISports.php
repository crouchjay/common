<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 3/27/2016
 * Time: 10:55 AM
 */

namespace Sports\Sport;


interface ISports {

    /**
     * Returns true if the passed parameter is equal to a position objects name.
     * ((IPosition) $positionObject)->getName() == $sport
     *
     * @param $position string
     * @return bool
     */
    public function contains(string $positionName): bool;

    /**
     * Returns an array of positions for the gui selector. [$name => $locale].
     *
     * @return array
     */
    public function getPositionsForGuiSelection(): array;

    public function getName(): string;

    public function getLocale(): string;
}