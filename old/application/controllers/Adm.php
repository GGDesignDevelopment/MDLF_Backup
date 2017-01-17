<?php

class Adm extends Admin_Controller {
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		redirect('admin/dashboard');
	}
}