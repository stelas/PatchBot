<?php

abstract class PatchBase {
	protected $patch;
	protected $data = '';
	function __construct(string $vendor, string $product, string $url) {
		$this->patch = new PatchObject(array('id' => $this->id(), 'vendor' => $vendor, 'product' => $product, 'url' => $url));
	}
	function __toString() : string {
		return (string)$this->patch;
	}
	function id() : string {
		return get_class($this);
	}
	function getPatch() : PatchObject {
		return $this->patch;
	}
	abstract function check() : bool;
	protected function fetch(string $url, bool $json = false) : bool {
		$opt = array('http' => array('user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:1.0) Gecko/20100101 Patchbot/1.0'));
		$ctx = stream_context_create($opt);
		if ($str = file_get_contents($url, false, $ctx)) {
			$this->data = $str;
			if ($json) {
				if (!($this->data = json_decode($str, true)))
					return false;
			}
			return true;
		}
		return false;
	}
	protected function parse(string $re) : bool {
		if ($str = $this->regex_str($re)) {
			$this->patch->SetVersion($str);
			return true;
		}
		return false;
	}
	protected function parse_json(string $key) : bool {
		$flat = iterator_to_array(new \RecursiveIteratorIterator(new \RecursiveArrayIterator($this->data)));
		if (!empty($flat[$key])) {
			$this->patch->SetVersion($flat[$key]);
			return true;
		}
		return false;
	}
	protected function array_extract(string $search) {
		foreach ($this->data as $val) {
			if (array_search($search, array_values($val)))
				$this->data = $val;
		}
	}
	protected function str_crop(string $head = '', string $tail = '') {
		if (!empty($head)) {
			if ($str = strstr($this->data, $head))
				$this->data = $str;
		}
		if (!empty($tail)) {
			if ($str = strstr($this->data, $tail, true))
				$this->data = $str;
		}
	}
	private function regex(string $pattern) {
		if (!preg_match($pattern, $this->data, $m))
			return false;
		// suppress full pattern match
		unset($m[0]);
		return $m;
	}
	private function regex_str(string $pattern) {
		$m = $this->regex($pattern);
		if ($m)
			return $m[1];
		return false;
	}
}

?>
