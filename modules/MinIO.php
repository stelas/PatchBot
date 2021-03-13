<?php

class MinIO extends PatchBase {
	function __construct() {
		parent::__construct('MinIO Inc.', 'MinIO Object Storage', 'https://min.io/download');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/minio/minio/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
