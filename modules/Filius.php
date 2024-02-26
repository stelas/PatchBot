<?php

class Filius extends PatchBase {
	function __construct() {
		parent::__construct('Stefan Freischlad', 'Filius', 'https://www.lernsoftware-filius.de/Herunterladen');
	}
	function check() : bool {
		if ($this->fetch('https://www.lernsoftware-filius.de/Herunterladen'))
			return $this->parse('_//www\.lernsoftware-filius\.de/downloads/Setup/filius-([\d\.]+)\.zip_');
		return false;
	}
}

?>
