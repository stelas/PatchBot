<?php

class XnView extends PatchBase {
	function __construct() {
		parent::__construct('Pierre-Emmanuel Gougelet', 'XnView', 'https://www.xnview.com/en/xnview-classic/');
	}
	function check() : bool {
		if ($this->fetch('https://www.xnview.com/en/xnview-classic/'))
			return $this->parse('/<strong>XnView ([\d\.]+)<\/strong>/');
		return false;
	}
}

?>
