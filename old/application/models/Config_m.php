<?php
class Config_M extends MY_Model {

	protected $_table_name = 'config';
	protected $_order_by = '';
	public  $rules = array(
			'linkFacebook' => array(
					'field' => 'linkFacebook',
					'label' => 'Link Facebook',
					'rules' => 'trim|required'
			),
			'linkTwitter' => array(
					'field' => 'linkTwitter',
					'label' => 'Link Twitter',
					'rules' => 'trim|required'
			),
			'linkInstagram' => array(
					'field' => 'linkInstagram',
					'label' => 'Link Instagram',
					'rules' => 'trim|required'
			),
			'linkFlickr' => array(
					'field' => 'linkFlickr',
					'label' => 'Link Flickr',
					'rules' => 'trim|required'
			),
			'tituloSobreMi' => array(
					'field' => 'tituloSobreMi',
					'label' => 'Titulo Sobre Mi',
					'rules' => 'trim|required'
			),
			'textoSobreMi' => array(
					'field' => 'textoSobreMi',
					'label' => 'Texto Sobre Mi',
					'rules' => 'trim|required'
			),
			'tituloMiTrabajo' => array(
					'field' => 'tituloMiTrabajo',
					'label' => 'Titulo Mi Trabajo',
					'rules' => 'trim|required'
			),
			'textoMiTrabajo' => array(
					'field' => 'textoMiTrabajo',
					'label' => 'Texto Mi Trabajo',
					'rules' => 'trim|required'
			),
	);
	
	function __construct() {
		parent::__construct();
	}
	
	function new_config() {
		$conf = new stdClass();
		$conf->id = 0;
		$conf->linkFacebook = '';
		$conf->linkTwitter = '';
		$conf->linkInstagram = '';
		$conf->linkFlickr = '';
		$conf->tituloSobreMi = '';
		$conf->textoSobreMi = '';
		$conf->tituloMiTrabajo = '';
		$conf->textoMiTrabajo = '';	
		$conf->imagenSobreMi = '';
		$conf->imagenMiTrabajo = '';
		return $conf;
	}
}