<div class="modal-body">
<?php echo validation_errors();?>
<?php echo form_open_multipart('','class="form-horizontal" role="form"');?>
	<div class="form-group">
		<div class="col-md-9"><input id="files" type="file" name="files[]" class="file" multiple data-preview-file-type="any" data-upload-url="#"></div>
	</div>
	<div class="form-group pull-right">
		<div class="col-sm-offset-2 col-sm-10">
			<?php echo form_submit('submit','Confirmar','class="btn btn-primary"');?>
		</div>
	</div>	
<?php echo form_close();?>
</div>
