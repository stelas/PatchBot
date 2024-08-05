<?php

class DigiKam extends PatchBase {
	function __construct() {
		parent::__construct('digiKam Team', 'digiKam', 'https://www.digikam.org/download/');
	}
	function check() : bool {
		if ($this->fetch('https://www.digikam.org/download/'))
			return $this->parse('_//download\.kde\.org/stable/digikam/[\d\.]+/digiKam-([\d\.]+)-Qt6-Win64\.exe\.mirrorlist_');
		return false;
	}
}

?>
