<?php

class GanttProject extends PatchBase {
	function __construct() {
		parent::__construct('BarD Software', 'GanttProject', 'https://www.ganttproject.biz/download');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/bardsoftware/ganttproject/releases/latest'))
			return $this->parse_json('tag_name', '/ganttproject-(.+)/');
		return false;
	}
}

?>
