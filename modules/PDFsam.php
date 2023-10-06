<?php

class PDFsam extends PatchBase {
	function __construct() {
		parent::__construct('Sober Lemur S.r.l.', 'PDFsam', 'https://pdfsam.org/download-pdfsam-basic/');
		$this->patch->setBranch('Basic');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/torakiki/pdfsam/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
