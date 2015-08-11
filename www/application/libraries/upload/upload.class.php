<?php

class Upload {
	public function __construct() {
		$this->CI = &get_instance();
		$this->CI->load->database();
		$this->CI->load->helper("common");
		$this->dbprefix = $this->CI->db->dbprefix;
	}

	function index() {
		include 'theme.upload.php';
	}

	function doUpload() {
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '1000';
		$config['max_width'] = '1920';
		$config['max_height'] = '1280';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload()) {
			echo $this->upload->display_errors();
		} else {
			//$data = array('upload_data' => $this->upload->data());
			//print_r($data);
			//exit;
			$fInfo = $this->upload->data();
			print_r($fInfo);
			//exit;
			$this->_createThumbnail($fInfo['file_name']);

			$data['uploadInfo'] = $fInfo;
			$data['thumbnail_name'] = $fInfo['raw_name'] . '_thumb' . $fInfo['file_ext'];
			$this->load->view('upload_success', $data);
		}
	}

	function _createThumbnail($fileName) {
		$config['image_library'] = 'gd2';
		$config['source_image'] = 'uploads/' . $fileName;
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 75;
		$config['height'] = 75;

		$this->load->library('image_lib', $config);
		if (!$this->image_lib->resize()) {
			echo $this->image_lib->display_errors();
		}

	}

	function upload_file() {

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '1000';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
		$config['encrypt_name'] = true;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload()) {
			$error = array('error' => $this->upload->display_errors());
			return $error;
		} else {
			$data = array('upload_data' => $this->upload->data());
			print_r($data);exit;
			return $data;
		}
	}
	function a() {
		$data = $this->upload_file();
		print_r($data);exit;
	}

}