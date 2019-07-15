<?php

class AdobeFlashPlayer extends PatchBase {
	function __construct() {
		parent::__construct('Adobe', 'Flash Player', 'https://get.adobe.com/de/flashplayer/');
	}
	function check() : bool {
		if ($this->fetch('https://get.adobe.com/flashplayer/webservices/json/?platform_type=Windows&platform_dist=XP&platform_arch=x86-32&platform_misc=&exclude_version=10&browser_arch=&browser_type=&browser_vers=&browser_dist=&eventname=flashplayerotherversions', true)) {
			$this->array_extract('flashplayerax');
			return $this->parse_json('Version');
		}
		return false;
	}
}

?>
