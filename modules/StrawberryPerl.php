<?php

class StrawberryPerl extends PatchBase {
	function __construct() {
		parent::__construct('Adam Kennedy', 'Strawberry Perl', 'https://strawberryperl.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://strawberryperl.com/releases.json'))
			return $this->parse_json('version');
		return false;
	}
}

?>
