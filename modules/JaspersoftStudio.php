<?php

class JaspersoftStudio extends PatchBase {
	function __construct() {
		parent::__construct('Cloud Software Group', 'Jaspersoft Studio', 'https://community.jaspersoft.com/project/jaspersoft-studio');
		$this->patch->setBranch('Community Edition');
	}
	function check() : bool {
		if ($this->fetch('https://community.jaspersoft.com/download-jaspersoft/community-edition/'))
			return $this->parse('/Jaspersoft Studio ([\d\.]+) \| Windows/');
		return false;
	}
}

?>
