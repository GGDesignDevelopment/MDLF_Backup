<?php

class Home extends Frontend_Controller {
	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->data['styles'][] = '<link rel="stylesheet" type="text/css" href="' . site_url('css/home.css') . '" />';
		$this->data['menuPosition'] = 'vertical';	
		$this->data['title'] = '';
		// Cargo css para menu con trancision
		$this->data['styles'][] = '<style type="text/css">#body {
				position: absolute;
				width: 100%;
				height: 100%;
				background: url(' . site_url('img/books.jpg') . ') no-repeat center center fixed;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
				transition: background 1s cubic-bezier(0.2, 0.4, 0.7, 0.8);
		
			}
			#itemCategorias {display:none;}	
			</style>';
		// Cargo script para menu con trancision
		$script = '<script>';
		
		foreach ($this->data['jqueryMenu'] as $item) {
			$script .= 'jQuery("#' . $item['id'] . '").hover(function(){jQuery("#body").css("background-image","url('. $item['img'] .')");});';
		}
		
		$script .= '</script>';
		$this->data['scripts'][] = $script;
		
		// Cargo subview
		$this->data['subview'] = 'frontend/home';
		$this->load->view('frontend/_layout_main', $this->data);
	}
	
	function sobremi() {
		$this->data['title'] = '- Sobre Mi';
		$this->data['styles'][] = '<link rel="stylesheet"  type="text/css" href="' . site_url('css/sobremi.css') . '" />';
		$this->data['scripts'][] = '<script type="text/javascript">$(document).ready(function() {
	        $( "#categorias" ).click(function() {
			  $( "#menu_flotante" ).toggle("200", "swing");
			  return false
			});
	    });</script>';
		$this->data['imgSobreMi'] = $this->imageDir . $this->data['conf']->imagenSobreMi;
		$this->data['imgMiTrabajo'] = $this->imageDir . $this->data['conf']->imagenMiTrabajo;		
		$this->data['subview'] = 'frontend/sobremi';		
		$this->load->view('frontend/_layout_main', $this->data);
	}	
	
	function contacto() {
		$this->load->model('contacto_m');
		$rules = $this->contacto_m->rules;
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == TRUE) {
			$data = $this->contacto_m->array_from_post(array('nombre','email','celular','texto'));
			$data['estado'] = 0;
			$data['creado'] = date('y-m-d H:i:s'); 
			$this->contacto_m->save($data, NULL);	
		}
 		redirect('home');
	}	
	
	function categoria($id = NULL) {		
		$this->data['page'] = $this->page_m->get($id);
		$this->data['title'] = '- ' . $this->data['page']->titulo;
		$hijos = $this->page_m->get_hijos($id);
		
		$this->data['styles'][] = '<link rel="stylesheet" type="text/css" href="' . site_url('css/categoria.css') . '" />';		
		$this->data['styles'][] = '<link rel="stylesheet" type="text/css" href="' . site_url('css/smoothDivScroll.css') . '" />';	
// 		$this->data['styles'][] = '<link rel="stylesheet" type="text/css" href="' . site_url('css/colorbox.css') . '" />';	
// 		$this->data['scripts'][] = '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>';
		$this->data['scripts'][] = '<script src="' . site_url('js/jquery-ui-1.10.3.custom.min.js') . '" type="text/javascript"></script>';
		$this->data['scripts'][] = '<script src="' . site_url('js/jquery.mousewheel.min.js') . '" type="text/javascript"></script>';
		$this->data['scripts'][] = '<script src="' . site_url('js/jquery.kinetic.min.js') . '" type="text/javascript"></script>';
		$this->data['scripts'][] = '<script src="' . site_url('js/jquery.smoothdivscroll-1.3-min.js') . '" type="text/javascript"></script>';
// 		$this->data['scripts'][] = '<script src="' . site_url('js/jquery.colorbox-min.js') . '" type="text/javascript"></script>';
		
		$script ='<script type="text/javascript">
		$(document).ready(function () {
			$("#makeMeScrollable").smoothDivScroll({
				mousewheelScrolling: "allDirections",
				manualContinuousScrolling: true,
				autoScrollingMode: "",
				hotSpotScrollingStep: 10,
				hotSpotScrollingInterval: 40,
				visibleHotSpotBackgrounds: "onStart"
			});';
				
		if (!count($hijos)) {	
			$script .= '$("#makeMeScrollable a").colorbox({rel:"slide", transition:"none", width:"75%", height:"75%"});';
		}
		$script .= '});
		$(document).ready(function() {				
	        $( "#categorias" ).click(function() {
			  $( "#menu_flotante" ).toggle("200", "swing");
			  return false
			});
	    });
		</script>';	
		
		$this->data['scripts'][] = $script;				
		$this->data['fotos'] = array();
		
		$index = 0;
		if (count($hijos)) {			
			foreach ($hijos as $hijo) {
				$image = $this->page_images_m->get($hijo->id);
				if (isset($image)) {
					$this->data['fotos'][$index]['src'] = site_url($this->imageDir . $image->foto);
					$this->data['fotos'][$index]['href'] = site_url('categoria/' . $hijo->id);		
					$index += 1;
				}
			}		
		} else {
			$images = $this->page_images_m->get_images($id);
			$index = 0;
			foreach ($images as $image) {
				$this->data['fotos'][$index]['src'] = site_url($this->imageDir . $image->foto);
				$this->data['fotos'][$index]['href'] = site_url($this->imageDir . $image->foto);
				$index += 1;
			}			
		}
		$this->data['subview'] = 'frontend/categoria';
		$this->load->view('frontend/_layout_main', $this->data);
	}	
}