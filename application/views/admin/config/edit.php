<div class="modal-header">
	<h4 class="modal-title">Configuraci&oacuten General</h4>
</div>
<div class="col-md-22">
<div class="modal-body">
<?php echo validation_errors();?>
<?php echo form_open_multipart('','class="form-horizontal" role="form"');?>
	<div class="form-group">
		<label class="control-label col-md-2">Link Facebook</label>
		<div class="col-md-10"><?php echo form_input('linkFacebook',$conf->linkFacebook,'class="form-control"');?></div>		
	</div>
	<div class="form-group">
		<label class="control-label col-md-2">Link Twitter</label>
		<div class="col-md-10"><?php echo form_input('linkTwitter',$conf->linkTwitter,'class="form-control"');?></div>		
	</div>
	<div class="form-group">
		<label class="control-label col-md-2">Link Instagram</label>
		<div class="col-md-10"><?php echo form_input('linkInstagram',$conf->linkInstagram,'class="form-control"');?></div>		
	</div>
	<div class="form-group">
		<label class="control-label col-md-2">Link Flickr</label>
		<div class="col-md-10"><?php echo form_input('linkFlickr',$conf->linkFlickr,'class="form-control"');?></div>		
	</div>		

	<div class="form-group">
		<label class="control-label col-md-2">Titulo Sobre Mi</label>
		<div class="col-md-10"><?php echo form_input('tituloSobreMi',$conf->tituloSobreMi,'class="form-control"');?></div>
	</div>	
	<div class="form-group">
		<label class="control-label col-md-2">Texto Sobre Mi</label>
		<div class="col-md-10"><?php echo form_textarea('textoSobreMi',$conf->textoSobreMi,'class="form-control"');?></div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-2">Titulo Mi Trabajo</label>
		<div class="col-md-10"><?php echo form_input('tituloMiTrabajo',$conf->tituloMiTrabajo,'class="form-control"');?></div>
	</div>	
	<div class="form-group">
		<label class="control-label col-md-2">Texto MiTrabajo</label>
		<div class="col-md-10"><?php echo form_textarea('textoMiTrabajo',$conf->textoMiTrabajo,'class="form-control"');?></div>
	</div>	
	<div class="form-group">
		<label class="control-label col-md-2">Imagen Sobre Mi</label>
		<div class="col-md-10"><input id="fileSobreMi" type="file" name="fileSobreMi" class="file" data-preview-file-type="any" data-upload-url="#"></div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-2">Imagen Mi Trabajo</label>
		<div class="col-md-10"><input id="fileMiTrabajo" type="file" name="fileMiTrabajo" class="file" data-preview-file-type="any" data-upload-url="#"></div>
	</div>	
	<div class="form-group pull-right">
		<div class="col-sm-offset-2 col-sm-10">
			<?php echo form_submit('submit','Confirmar','class="btn btn-primary"');?>
		</div>
	</div>	
<?php echo form_close();?>
</div>
</div>