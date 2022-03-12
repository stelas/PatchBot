<?php

class SysRescCd extends PatchBase {
	function __construct() {
		parent::__construct('Francois Dupoux', 'SystemRescueCd', 'http://www.system-rescue.org/Download/');
	}
	function check() : bool {
		if ($this->fetch('http://www.system-rescue.org/Detailed-packages-list/'))
			return $this->parse('/<strong>SystemRescue-([\d\.]+)<\/strong>/');
		return false;
	}
}

?>
