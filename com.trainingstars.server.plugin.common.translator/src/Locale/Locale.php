<?php

namespace Translator\Locale;

class Locale {

    private static $EN = 'en';

    private static $DE = 'de';
    
    private static $LOCALES = [];
    
    private static $GUI_OPTIONS = [];

    public static function isLocale($locale) {
        $locales = self::getLocales();
        
        for ($i = 0; $i < count($locales); ++$i) {
            if ($locale == $locales[$i]) {
                return true;
            }
        }

        return false;
    }

    public static function notEnglish($locale) {
        return $locale != self::$EN;
    }

    public static function getEnglish() {
        return self::$EN;
    }

    public static function getGUIOptions() {
    	if (empty(self::$GUI_OPTIONS)) {
    		self::$GUI_OPTIONS = [
    				'en' => 'English',
    				'de' => 'Deutsch'
    		];
    	}
    	return self::$GUI_OPTIONS;
    }

    private static function getLocales() {
    	if (empty(self::$LOCALES)) {
    		self::$LOCALES = [
    				self::$EN,
    				self::$DE
    		];
    	}
        return self::$LOCALES;
    }
}