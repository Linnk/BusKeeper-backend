<form id="formFilesUpload" method="post" action="add-files" enctype="multipart/form-data">
	<?php foreach($fields as $field => $description):
		if(isset($associations['belongsTo'][$field])):
			$options = $associations['belongsTo'][$field]['results'];
			if($description['default']!==null):
				$default = $description['default'];
				$empty_text = isset($options[$default]) ? $options[$default]:"(".translate("empty").")";
				$options = [$default => $empty_text] + $options;
			endif;
			echo $this->BForm->input($field,array_merge([
				'id'=>'123', 
				'options'=>$options
			],$description));
		endif;
	endforeach; ?>
	<fieldset class="form-group">
		<label for="FilesInput">Selecciona tus archivos</label>
		<input id="FilesInput" type="file" multiple="true" class="form-control" name="files[]" >
		<small class="text-muted">Puedes seleccionar varios archivos manualmente, o arrastrarlos en cualquier parte.</small>
	</fieldset>
	<button type="submit" class="btn btn-primary">Subir</button>
</form>