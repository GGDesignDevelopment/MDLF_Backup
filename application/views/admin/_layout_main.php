<?php $this->load->view('admin/components/page_head');?>
 <body>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url('admin/dashboard');?>">Backend</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><?php echo anchor('admin/dashboard','Dashboard');?></li>
            <li><?php echo anchor('admin/user','Usuarios');?></li>
            <li><?php echo anchor('admin/page','Paginas');?></li>
            <li><?php echo anchor('admin/contacto','Contactos');?></li>
            <li><?php echo anchor('admin/config/edit/' . $conf->id,'Configuracion');?></li> 
           </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><?php echo mailto($this->session->userdata('email'),'<i class="glyphicon glyphicon-user"></i> ' . $this->session->userdata('nombre')); ?></li>
            <li><?php echo anchor('admin/user/logout','<i class="glyphicon glyphicon-off"></i> Logout'); ?></li>
          </ul>          
        </div>        
      </div>
    </nav>
    
    <div class="container">
		<?php $this->load->view($subview)?>
    </div>
<?php $this->load->view('admin/components/page_footer');?>