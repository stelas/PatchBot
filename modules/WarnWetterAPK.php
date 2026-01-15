<?php

class WarnWetterAPK extends PatchBase {
	function __construct() {
		parent::__construct('Deutscher Wetterdienst', 'WarnWetter', 'https://www.dwd.de/DE/leistungen/warnwetterapp/apk/download_apk_android5_x.html');
		$this->patch->setBranch('Android');
	}
	function check() : bool {
		if ($this->fetch('https://www.dwd.de/DE/leistungen/warnwetterapp/apk/download_apk_android5_x.html'))
			return $this->parse('/\(apk - ([\d\.]+)\)/');
		return false;
	}
}

?>
