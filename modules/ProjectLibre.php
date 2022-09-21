<?php

class ProjectLibre extends PatchBase {
	function __construct() {
		parent::__construct('ProjectLibre Inc.', 'ProjectLibre', 'https://www.projectlibre.com/product/1-alternative-microsoft-project-open-source');
	}
	function check() : bool {
		if ($this->fetch_json('https://sourceforge.net/projects/projectlibre/best_release.json'))
			return $this->parse_json('filename', '/^\/ProjectLibre\/(.+)\//');
		return false;
	}
}

?>
