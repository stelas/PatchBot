<?php

class Tftpd32 extends PatchBase {
	function __construct() {
		parent::__construct('Philippe Jounin', 'Tftpd64', 'https://tftpd32.jounin.net/tftpd32_download.html');
	}
	function check() : bool {
		if ($this->fetch('https://tftpd32.jounin.net/tftpd32_news.html'))
			return $this->parse('/<td>Version ([\d\.]+)<\/td>/');
		return false;
	}
}

?>
