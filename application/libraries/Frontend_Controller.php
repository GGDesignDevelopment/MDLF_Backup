<?php
class Frontend_Controller extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('page_m');
		$this->load->model('page_images_m');
		$this->data['menuPosition'] = 'horizontal';
		$this->data['styles'][] = '<link rel="stylesheet" type="text/css" href="' . site_url('css/reset.css') . '" />';
		$this->data['styles'][] = '<link rel="stylesheet" type="text/css" href="' . site_url('css/fonts.css') . '" />';
		$this->data['styles'][] = '<link rel="stylesheet" type="text/css" href="' . site_url('css/icons.css') . '" />';
		$this->data['styles'][] = '<link rel="stylesheet" type="text/css" href="' . site_url('css/contacto.css') . '" />';		
		$this->data['styles'][] = '<link rel="stylesheet" type="text/css" href="' . site_url('css/colorbox.css') . '" />';
		$menu = $this->page_m->get_hijos(0);
		$menuFlotante = '<ul>';
		$index = 0;
		$this->data['jqueryMenu'] = array();
		foreach ($menu as $item) {
			$image = $this->page_images_m->get($item->id);
			$this->data['jqueryMenu'][$index]['id'] = str_replace('&', '', str_replace('/', '', str_replace(' ', '', $item->descripcion)));
			if (isset($image)) {
				$this->data['jqueryMenu'][$index]['img'] = site_url($this->imageDir . $image->foto);				
			} else {	
				$this->data['jqueryMenu'][$index]['img'] = '';
			}
			$index +=1;
			$menuFlotante .= '<li><a id="' . str_replace('&', '', str_replace('/', '', str_replace(' ', '', $item->descripcion))) . '" href="'. site_url('categoria/' . $item->id) . '">' . $item->descripcion . '</a></li>';
		}
		'</ul>';	
		$this->data['menuFlotante'] = $menuFlotante;
		
		$this->data['scripts'][] = '<script src="' . site_url('js/jquery.colorbox-min.js') . '" type="text/javascript"></script>';		
		$this->data['scripts'][] = '<script type="text/javascript">$(document).ready(function (){$("#contactame").colorbox({inline:true});})</script>';		
	}
}