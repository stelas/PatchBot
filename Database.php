<?php

class Database {
	private $time = 0;
	private $file = '';
	private $data = array();
	function __construct(string $file) {
		$this->time = time();
		$this->file = $file;
	}
	function sort() : bool {
		return usort($this->data, array($this, 'cmp'));
	}
	function load() : bool {
		if ($json = file_get_contents($this->file)) {
			if ($arr = json_decode($json, true)) {
				foreach ($arr as $obj) {
					array_push($this->data, new PatchObject($obj));
				}
				return true;
			}
		}
		return false;
	}
	function save() : bool {
		$arr = array();
		foreach ($this->data as $obj) {
			array_push($arr, $obj->toArray());
		}
		if ($json = json_encode($arr, JSON_PRETTY_PRINT)) {
			if (file_put_contents($this->file, $json)) {
				return true;
			}
		}
		return false;
	}
	function time() : int {
		return $this->time;
	}
	function count() : int {
		return count($this->data);
	}
	function get(int $n) : PatchObject {
		return $this->data[$n];
	}
	function find(string $id) : PatchObject {
		foreach ($this->data as $obj) {
			if (strcmp($obj->getId(), $id) == 0) {
				return $obj;
			}
		}
		return new PatchObject();
	}
	function addOrUpdate(PatchObject $patch) {
		$patch->setTimestamp($this->time);
		foreach ($this->data as &$obj) {
			if (strcmp($obj->getId(), $patch->getId()) == 0) {
				$obj = $patch;
				return;
			}
		}
		array_push($this->data, $patch);
	}
	private function cmp(PatchObject $a, PatchObject $b) : int {
		return strcasecmp($a->getProduct() . $a->getBranch(), $b->getProduct() . $b->getBranch());
	}
}

?>
