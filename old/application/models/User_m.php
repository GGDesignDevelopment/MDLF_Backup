<?php
class User_M extends MY_Model {

	protected $_table_name = 'usuarios';
	protected $_order_by = '';
	public  $rules = array(
			'email' => array(
					'field' => 'email',
					'label' => 'Email',
					'rules' => 'trim|required|valid_email'
			),
			'password' => array(
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'trim|required'
			)
	);
	public  $rules_admin = array(
			'nombre' => array(
					'field' => 'nombre',
					'label' => 'Nombre',
					'rules' => 'trim|required'
			),				
			'email' => array(
					'field' => 'email',
					'label' => 'Email',
					'rules' => 'trim|required|callback__unique_email|valid_email'
			),
			'password' => array(
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'trim|matches[password_confirm]'
			),
			'password_confirm' => array(
					'field' => 'password_confirm',
					'label' => 'Confirmar Password',
					'rules' => 'trim|matches[password]'
			)			
			
	);
	
	function __construct() {
		parent::__construct();
	}
	
	function login() {
		$user = $this->get_by(array(
				'email' => $this->input->post('email'),
				'password' => $this->hash($this->input->post('password')),
		),TRUE);
		
		if (count($user)) {
			$data = array(
				'nombre' => $user->nombre,
				'email' => $user->email,
				'id' => $user->id,
				'loggedin' => TRUE,
			);
			$this->session->set_userdata($data);
		}
	}
	function logout() {
		$this->session->sess_destroy();
	}
	
	function loggedin() {
		return (bool) $this->session->userdata('loggedin');
	}
	
	function new_user() {
		$user = new stdClass();
		$user->nombre = '';
		$user->email = '';
		$user->password = '';
		return $user;
	}
	
	function hash($string) {
		return hash('sha512', $string . config_item('encryption_key'));
	}
}