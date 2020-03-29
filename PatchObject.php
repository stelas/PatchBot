<?php

class PatchObject {
	private $id = '';
	private $vendor = '';
	private $product = '';
	private $branch = '';
	private $version = '';
	private $url = '';
	private $timestamp = 0;
	function __construct(array $arr = array()) {
		foreach ($arr as $key => $val) {
			if (property_exists(__CLASS__, $key))
				$this->{$key} = $val;
		}
	}
	function __toString() : string {
		return $this->vendor . ' ' . $this->product . ' ' . $this->branch . ' ' . $this->version;
	}
	function toArray() : array {
		return array('id' => $this->id, 'vendor' => $this->vendor, 'product' => $this->product, 'branch' => $this->branch, 'version' => $this->version, 'url' => $this->url, 'timestamp' => $this->timestamp);
	}
	function getId() : string {
		return $this->id;
	}
	function getVendor() : string {
		return $this->vendor;
	}
	function getProduct() : string {
		return $this->product;
	}
	function getBranch() : string {
		return $this->branch;
	}
	function getVersion() : string {
		return $this->version;
	}
	function setVersion(string $version) {
		$this->version = $version;
	}
	function getURL() : string {
		return $this->url;
	}
	function getTimestamp() : int {
		return $this->timestamp;
	}
	function setTimestamp(int $timestamp) {
		$this->timestamp = $timestamp;
	}
}

?>
