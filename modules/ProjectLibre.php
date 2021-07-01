<?php

class ProjectLibre extends PatchBase {
	function __construct() {
		parent::__construct('ProjectLibre Inc.', 'ProjectLibre', 'https://www.projectlibre.com/product/1-alternative-microsoft-project-open-source');
	}
	function check() : bool {
		if ($this->fetch('https://sourceforge.net/projects/projectlibre/files/latest/download'))
			return $this->parse('/<div class="file-name">\s*projectlibre-([\d\.]+)\.jar\s*<\/div>/');
		return false;
	}
}

?>
