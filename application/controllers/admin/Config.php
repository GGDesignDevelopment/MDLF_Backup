<?php

class Config extends Admin_Controller {
	function __construct() {
		parent::__construct();
	}
	
	function edit($id = NULL) {					
		$script = '$("#fileSobreMi").fileinput({
				uploadAsinc: false,
				showUpload: false,
				showRemove: false,
				overwriteInitial: false,
				overwrite:false,';
		if ($this->data['conf']->imagenSobreMi <> '') {				
			$script .= 'initialPreview: [';		
			$script .= "'<img src=" . '"' . site_url($this->imageDir . $this->data['conf']->imagenSobreMi) . '" class="file-preview-image">' . "',";
			$script .= '], initialPreviewConfig: [' ;				
			$script .= '{height:"120px", url:"' . site_url('admin/config/delete_image_sobremi') . '"},';				
			$script .= ']';
		}
		
		$script .= '});';
		
		$script .= '$("#fileMiTrabajo").fileinput({
				uploadAsinc: false,
				showUpload: false,
				showRemove: false,
				overwriteInitial: false,
				overwrite:false,';
				
		if ($this->data['conf']->imagenMiTrabajo <> '') {
			$script .= 'initialPreview: [';
			$script .= "'<img src=" . '"' . site_url($this->imageDir . $this->data['conf']->imagenMiTrabajo) . '" class="file-preview-image">' . "',";
			$script .= '], initialPreviewConfig: [' ;
			$script .= '{height:"120px", url:"' . site_url('admin/config/delete_image_mitrabajo'). '"},';
			$script .= ']';
		}
		$script .= '});';
		
		$this->data['myScript'] = $script;

 		// Setea reglas para form
		$rules = $this->config_m->rules;
		$this->form_validation->set_rules($rules);
 		if ($this->form_validation->run() == TRUE) {
// 			//Levanta campos del form
 			$data = $this->config_m->array_from_post(array('linkFacebook','linkTwitter','linkInstagram','linkFlickr','tituloSobreMi','textoSobreMi','tituloMiTrabajo','textoMiTrabajo'));
// 			// Guardo datos en BD

			if (!empty($_FILES['fileSobreMi'])) {
				$ext = explode('.', basename($_FILES['fileSobreMi']['name']));
				$name = md5(uniqid()) . "." . array_pop($ext);
				$target = $this->imageDir . $name; 
				if(move_uploaded_file($_FILES['fileSobreMi']['tmp_name'], $target)) {
					$data['imagenSobreMi'] = $name;
				}
			}
			if (!empty($_FILES['fileMiTrabajo'])) {
				$ext = explode('.', basename($_FILES['fileMiTrabajo']['name']));
				$name = md5(uniqid()) . "." . array_pop($ext);
				$target = $this->imageDir . $name;
				if(move_uploaded_file($_FILES['fileMiTrabajo']['tmp_name'], $target)) {
					$data['imagenMiTrabajo'] = $name;
				}
			}
 			$newId = $this->config_m->save($data, $id); 				
  			redirect('admin/dashboard');
 		}
		$this->data['subview'] = 'admin/config/edit';
		$this->load->view('admin/_layout_main',$this->data);		
	}
	
	function delete_image_sobremi() {
		if ($this->data['conf']->imagenSobreMi <> '') {
			unlink($this->imageDir . $this->data['conf']->imagenSobreMi);
			$data['imagenSobreMi'] = '';
			$newId = $this->config_m->save($data, $this->data['conf']->id); 		
			echo 0;
		}
	}
	
	function delete_image_mitrabajo() {
		if ($this->data['conf']->imagenMiTrabajo <> '') {
			unlink($this->imageDir . $this->data['conf']->imagenMiTrabajo);
			$data['imagenMiTrabajo'] = '';
			$newId = $this->config_m->save($data, $this->data['conf']->id); 		
			echo 0;
		}
	}	
}