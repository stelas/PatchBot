<?php

class Tftpd32 extends PatchBase {
	function __construct() {
		parent::__construct('Philippe Jounin', 'Tftpd64', 'https://tftpd32.jounin.net/tftpd32_download.html');
	}
	function check() : bool {
		if ($this->fetch('https://pjo2.github.io/tftpd64/'))
			return $this->parse('_/[Tt]ftpd64-([\d\.]+)-setup\.exe_');
		return false;
	}
}

?>
