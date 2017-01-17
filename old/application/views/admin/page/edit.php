<div class="modal-header">
	<h4 class="modal-title"><?php echo empty($page->id) ? 'Nueva Pagina' : 'Editar Pagina';?></h4>
</div>
<div class="col-md-12">
<div class="modal-body">
<?php echo validation_errors();?>
<?php echo form_open_multipart('','class="form-horizontal" role="form"');?>
	<div class="form-group">
		<label class="control-label col-md-1">Descripcion</label>
		<div class="col-md-11"><?php echo form_input('descripcion',$page->descripcion,'class="form-control"');?></div>		
	</div>
	<div class="form-group">
		<label class="control-label col-md-1">Padre</label>
		<div class="col-md-11"><?php echo form_dropdown('padre',$paginas_sin_padre,$page->padre,'class="form-control"');?></div>		

	</div>	
	<div class="form-group">
		<label class="control-label col-md-1">Titulo</label>
		<div class="col-md-11"><?php echo form_input('titulo',$page->titulo,'class="form-control"');?></div>
	</div>	
	<div class="form-group">
		<label class="control-label col-md-1">Texto</label>
		<div class="col-md-11"><?php echo form_textarea('texto',$page->texto,'class="form-control"');?></div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-1">Imagenes</label>
		<div class="col-md-11"><input id="files" type="file" name="files[]" class="file" multiple data-preview-file-type="any" data-upload-url="#"></div>
	</div>
	<div class="form-group pull-right">
		<div class="col-sm-offset-2 col-sm-10">
			<?php echo form_submit('submit','Confirmar','class="btn btn-primary"');?>
		</div>
	</div>	
<?php echo form_close();?>
</div>
</div>