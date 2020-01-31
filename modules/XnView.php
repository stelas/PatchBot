<?php

class XnView extends PatchBase {
	function __construct() {
		parent::__construct('Pierre-Emmanuel Gougelet', 'XnView', 'https://www.xnview.com/en/xnview/');
	}
	function check() : bool {
		if ($this->fetch('https://www.xnview.com/en/xnview/'))
			return $this->parse('/<strong>XnView ([\d\.]+)<\/strong>/');
		return false;
	}
}

?>
