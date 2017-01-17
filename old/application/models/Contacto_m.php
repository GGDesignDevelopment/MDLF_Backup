<?php
class Contacto_M extends MY_Model {

	protected $_table_name = 'contactos';
	protected $_order_by = 'estado, creado';
	public  $rules = array(
			'nombre' => array(
					'field' => 'nombre',
					'label' => 'Nombre',
					'rules' => 'trim|required'
			),
			'email' => array(
					'field' => 'email',
					'label' => 'email',
					'rules' => 'trim|required|valid_email'
			),
			'celular' => array(
					'field' => 'celular',
					'label' => 'celular',
					'rules' => 'trim|required'
			),
			'texto' => array(
					'field' => 'texto',
					'label' => 'texto',
					'rules' => 'trim|required'
			),
	);
	
	function __construct() {
		parent::__construct();
	}
	
	function new_contacto() {
		$contacto = new stdClass();
		$contacto->nombre = '';
		$contacto->email = '';
		$contacto->celular = '';
		$contacto->texto = '';
		$contacto->estado = 0;
		return $contacto;
	}
}