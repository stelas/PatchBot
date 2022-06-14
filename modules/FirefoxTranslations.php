<?php

class FirefoxTranslations extends PatchBase {
	function __construct() {
		parent::__construct('Mozilla', 'Firefox Translations', 'https://addons.mozilla.org/en-US/firefox/addon/firefox-translations/');
		$this->patch->setBranch('for Firefox');
	}
	function check() : bool {
		if ($this->fetch('https://addons.mozilla.org/en-US/firefox/addon/firefox-translations/'))
			return $this->parse('/"version":"([\d\.a-z]+)"/');
		return false;
	}
}

?>
