<?php
class Admin_Controller extends MY_Controller {
	function __construct() {
		parent::__construct();

		$this->load->model('user_m');
		$this->load->model('page_m');
		$this->load->model('config_m');
		$this->load->model('contacto_m');
		$this->load->library('encryption');
		$this->load->library('session');		
		$excepcion_uri = array('admin/user/login','admin/user/logout');
		$this->data['myScript'] = array();
		if (in_array(uri_string(), $excepcion_uri) == FALSE) {
			if ($this->user_m->loggedin() == FALSE) {
				redirect('admin/user/login');
			}
		}
	}
}