<?php

class MagnolieOrganizer extends PatchBase {
	function __construct() {
		parent::__construct('Maik Walter', 'Magnolie Organizer', 'https://gitlab.com/maik3531/mint-forgs/-/tree/main/Magnolie-Organitzer');
	}
	function check() : bool {
		if ($this->fetch_xml('https://gitlab.com/maik3531/mint-forgs/-/raw/main/Magnolie-Organitzer/update.xml'))
			return $this->parse_xml('//update/version');
		return false;
	}
}

?>
