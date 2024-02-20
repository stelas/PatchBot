<?php

class Duplicity extends PatchBase {
	function __construct() {
		parent::__construct('Kenneth Loafman', 'Duplicity', 'http://duplicity.gitlab.io/duplicity-web/');
	}
	function check() : bool {
		if ($this->fetch_json('https://gitlab.com/api/v4/projects/12450835/releases'))
			return $this->parse_json('tag_name', '/rel\.(.+)/');
		return false;
	}
}

?>
