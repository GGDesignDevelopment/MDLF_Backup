<?php

class MY_Controller extends CI_Controller {
	
	public $data = array();
	public $imageDir = 'img/';
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('config_m');
		$this->data['errors'] = array();
		$this->data['site_name'] = config_item('site_name');
		$this->data['scripts'] = array();
		$this->data['styles'] = array();
		$this->data['title'] = '';
		$this->data['conf']  = $this->config_m->get(NULL, TRUE);
		if (!count($this->data['conf'])) {
			$this->data['conf'] = $this->config_m->new_config();
		}
	}
}