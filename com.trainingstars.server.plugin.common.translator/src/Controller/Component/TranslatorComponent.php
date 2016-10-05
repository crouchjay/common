<?php

namespace Translator\Controller\Component;

use Cake\Controller\Component;
use Cake\Event\Event;
use Cake\I18n\I18n;
use Cake\Core\Configure;
use Translator\Locale\Locale;

class TranslatorComponent extends Component {
	
	public function beforeFilter(Event $event) {
		$locale = null;
		if (isset( $this->request->params['language'] )) {
			$locale = $this->request->params['language'];
	
			if (Locale::isLocale($locale)) {
				if (Locale::notEnglish($locale)) {
					I18n::locale($locale);
				}
	
				Configure::write( 'Config.language',  $locale);
			}
		} else {
			$locale = Locale::getEnglish();
	
			Configure::write('Config.language', $locale);
		}
		
		$controller = $event->subject();
	
		$controller->set('languageOptions', Locale::getGUIOptions());
	
		$controller->set('selectedLanguage', $locale);
	}
}