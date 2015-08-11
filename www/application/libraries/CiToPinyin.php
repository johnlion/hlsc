<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

include 'pinyin/pinyin.class.php';
class CiToPinyin extends Pinyin {
	public function __construct() {
		parent::__construct();

	}
}