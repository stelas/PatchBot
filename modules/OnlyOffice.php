<?php

class OnlyOffice extends PatchBase {
	function __construct() {
		parent::__construct('Ascensio System SIA', 'OnlyOffice', 'https://www.onlyoffice.com/download-desktop.aspx');
		$this->patch->setBranch('Desktop Editors');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/ONLYOFFICE/DesktopEditors/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
