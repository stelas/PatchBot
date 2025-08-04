<?php

class FileZilla extends PatchBase {
	function __construct() {
		parent::__construct('Tim Kosse', 'FileZilla', 'https://filezilla-project.org/download.php?show_all=1');
	}
	function check() : bool {
		if ($this->fetch('https://update.filezilla-project.org/update.php?initial=0&manual=1&osarch=64&osversion=10.0&package=1&platform=x86_64-w64-mingw32&updated=0&version=3.69.0', array('CURLOPT_USERAGENT' => 'FileZilla/3.69.0', 'CURLOPT_HTTPHEADER' => array('Accept:', 'Connection: close'), 'CURLOPT_SSL_VERIFYPEER' => false)))
			return $this->parse('/release ([\d\.]+)/');
		return false;
	}
}

?>
