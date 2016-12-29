<?php
class Page_Images_M extends MY_Model {
	protected $_table_name = 'paginas_fotos';
	protected $_order_by = '';
	
	function __construct() {
		parent::__construct();
	}
	
	function get_images($id, $secuencial=NULL) {
		$id = intval($id);	
		$this->db->where('id', $id);
		$method = 'result';
		if ($secuencial !== NULL) {
			$secuencial = intval($secuencial);
			$this->db->where('secuencial', $secuencial);
			$method = 'row';
		}
		
		$this->db->order_by('id, secuencial');
		return $this->db->get($this->_table_name)->$method();				
	}
	function save_image($data) {
		$this->db->set($data);
		$this->db->insert($this->_table_name);	
	}
	
	function deleteImage($id, $secuencial) {
		$this->db->where('secuencial', $secuencial);
		parent::delete($id);
	}
}