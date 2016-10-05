<?php

namespace Sports\Sport;

class Sports {
    
    /** @var Sports */
    private static $instance;

    private $sports;

    private function __construct() {
    }

    public static function getInstance(): Sports {
    	if (self::$instance == null) {
    		self::$instance = new Sports();
    	}
    	
        return self::$instance;
    }

    /**
     * Returns an array of sports for the gui selector. [$name => $locale].
     *
     * @return array
     */
    public function getSportsForGuiSelection(): array {
        $sports = $this->getAll();

        $sportsArrayForGuiSelection = [];

        foreach ($sports as $sport) {
            /** @var ISports $sport */
            $sportsArrayForGuiSelection[$sport->getName()] = $sport->getLocale();
        }

        return $sportsArrayForGuiSelection;
    }

    /**
     * Returns true if the passed parameter is equal to a sport objects name.
     * ((ISport) $sportObject)->getName() == $sport
     *
     * @param $sport string
     * @return bool
     */
    public function contains($sport): bool {
    	try {
    		$result = $this->getSportByName($sport);
    	} catch (\TypeError $e) {
    		return false;
    	}
    	
    	return true;
    }

    public function getSportByName($sportName): ISports {
        $sports = $this->getAll();
        
        if (empty($sports)) {
        	return null;
        }
        
        foreach($sports as $sport) {
        	if (($sport instanceof ISports) && ($sport->getName() == $sportName)) {
        		return $sport;
        	}
        }

        return null;
    }

    /**
     * @return array
     */
    private function getAll(): array {
        if ($this->sports == null) {
        	
        	$this->sports = [
        			SportAmericanFootball::getInstance(),
        			new SportBasketball(),
        			new SportFootball(),
        			new SportMartialArts(),
        			new SportStrengthAndConditioning(),
        			new SportTrackAndField(),
        			new SportTriathlon(),
        			new SportVolleyball(),
        			new SportYoga()
        	];
        }

        return $this->sports;
    }
}