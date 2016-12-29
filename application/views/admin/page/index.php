	<h2>Paginas</h2>
	<?php echo anchor('admin/page/edit','<i class="glyphicon glyphicon-plus"></i> Agregar Pagina');?>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>Descripcion</th>
				<th>Padre</th>
				<th>Edit</th>
				<th>Delete</th>				
			</tr>
		</thead>
		<tbody>
		<?php if (count($pages)): foreach ($pages as $page): ?>
			<tr>
				<td><?php echo $page->id;?></td>
				<td><?php echo anchor('admin/page/edit/' . $page->id, $page->descripcion);?></td>
				<td><?php echo $page->padreDescripcion ;?></td>							
				<td><?php echo btn_edit('admin/page/edit/' . $page->id);?></td>
				<td><?php echo btn_delete('admin/page/delete/' . $page->id);?></td>				
			</tr>			
		<?php endforeach;?>
		<?php else: ?>
			<tr>
				<td colspan=5>No se encontraron paginas</td>
			</tr>			
		<?php endif;?>					
		</tbody>
	</table>