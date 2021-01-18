<?php

class DataTables extends PatchBase {
	function __construct() {
		parent::__construct('SpryMedia', 'DataTables', 'https://datatables.net/download/');
	}
	function check() : bool {
		if ($this->fetch('https://cdn.datatables.net/'))
			return $this->parse('/<p>DataTables ([\d\.]+) is the current stable release of DataTables\.<\/p>/');
		return false;
	}
}

?>
