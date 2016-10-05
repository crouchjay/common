<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 4/16/2016
 * Time: 7:40 AM
 */

namespace Sports\Sport;


use Cake\Filesystem\Folder;
use Sports\Position\IPosition;
use Sports\Position\PositionNotSure;

abstract class AbstractSport implements ISports {
	
	private static $POSITION_STRING = 'Position';
	
	private static $positionNamespace = 'Sports\Position\\';
	
    private $positions;
	
	private $folder_path = ROOT . DS . 'vendor' . DS . 'trainingstars' . DS . 'sports' . DS . 'src' . DS;

    /**
     * Returns an array of positions for the gui selector. [$name => $locale].
     *
     * @return array
     */
    public function getPositionsForGuiSelection(): array {
        $positions = $this->getAllPositions();

        $positionsArrayForGuiSelection = [];

        foreach ($positions as $position) {
            /** @var IPosition $position */
            $positionsArrayForGuiSelection[$position->getName()] = $position->getLocale();
        }

        return $positionsArrayForGuiSelection;
    }

    /**
     * Returns true if the passed parameter is equal to a position objects name.
     * ((IPosition) $positionObject)->getName() == $sport
     *
     * @param positionName string
     * @return bool
     */
    public function contains(string $positionName): bool {
        $positions = $this->getAllPositions();

        if (empty($positions)) {
        	return false;
        }
        
        foreach ($positions as $position) {
        	if (($position instanceof IPosition) && ($position->getName() == $positionName)) {
        		return true;
        	}
        }
        
        return false;
    }

    /**
     * Returns all positions related to the sport
     * @return array
     */
    protected function getAllPositions(): array {
        if ($this->positions == null) {
            $positionDir = new Folder(self::$folder_path . self::$POSITION_STRING . DS . $this->getName());

            $positionDirContent = $positionDir->read(true);

            $this->positions = [new PositionNotSure()];

            foreach ($positionDirContent[1] as $file) {
                $position = substr($file, 8, -4);
                $className = self::$positionNamespace . $this->getName() . '\\' . self::$POSITION_STRING . $position;
                $this->positions[] = new $className;
            }
        }

        return $this->positions;
    }
}