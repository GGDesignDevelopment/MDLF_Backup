<div class="modal-header">
	<h4 class="modal-title"><?php echo empty($user->id) ? 'Nuevo Usuario' : 'Editar Usuario';?></h4>
</div>
<div class="col-md-8">
<div class="modal-body">
<?php echo validation_errors();?>
<?php echo form_open('','class="form-horizontal" role="form"');?>
	<div class="form-group">
		<label class="control-label col-md-3">Nombre</label>
		<div class="col-md-9"><?php echo form_input('nombre',$user->nombre,'class="form-control"');?></div>
		
	</div>
	<div class="form-group">
		<label class="control-label col-md-3">Email</label>
		<div class="col-md-9"><?php echo form_input('email',$user->email,'class="form-control"');?></div>
	</div>	
	<div class="form-group">
		<label class="control-label col-md-3">Password</label>
		<div class="col-md-9"><?php echo form_password('password','','class="form-control"');?></div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3">Confirmar Password</label>
		<div class="col-md-9"><?php echo form_password('password_confirm','','class="form-control"');?></div>
	</div>
	<div class="form-group pull-right">
		<div class="col-sm-offset-2 col-sm-10">
			<?php echo form_submit('submit','Confirmar','class="btn btn-primary"');?>
		</div>
	</div>	
<?php echo form_close();?>
</div>
</div>