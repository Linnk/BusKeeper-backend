<?php
$this->breadcrumb = false;
echo $this->BForm->create(null, ['type' => 'file']);
?>
<div class="container-full">
	<div class="bg-lightest p-t-1">
	</div>
</div>
<div class="website-info">
	<h2>Información del website</h2>
	<span class="display-6">Título del sitio</span>
	<?php echo $this->BForm->input('website_name',['value' => $this->Settings->get('website_name'), 'label' => 'Escribe el título del sitio, ej. Sussie 4']) ?>
	<hr>
	<span class="display-6">Descripción del sitio</span>
	<?php echo $this->BForm->input('website_description',['value' => $this->Settings->get('website_description'), 'label' => 'Escribe una pequeña reseña de tu sitio']) ?>
	<hr>
	<span class="display-6">Palabras clave</span>
	<?php echo $this->BForm->input('website_keywords',['value' => $this->Settings->get('website_keywords'), 'label' => 'Escribe las palabras clave, separadas por comas.']) ?>
	<small class="form-text text-muted">Estas palabras ayudan a que los usuarios puedan encontrar el sitio en buscadores, deben ser conceptos relacionados al sitio.</small>
	<br>
	<span class="display-6">Imagen Navbar</span>
	<?php echo $this->BForm->input('navbar_brand_logo',[
		'value' => $this->Settings->get('navbar_brand_logo'),
		'input' => 'image',
		'add-text' => 'Subir una foto',
		'remove-text' => 'Remover imagen',
		'change-text' => 'Subir una foto nueva',
		'cancel-text' => 'Cancelar',
		'label' => 'Es la imagen de favicon aparece en el "tab" del explorador. Se recomienda subir imágenes de altura de 40 px'
	]) ?>
	<span class="display-6">Imagen Favicon</span>
	<?php echo $this->BForm->input('website_favicon',[
		'value' => $this->Settings->get('website_favicon'),
		'input' => 'image',
		'add-text' => 'Subir una foto',
		'remove-text' => 'Remover imagen',
		'change-text' => 'Subir una foto nueva',
		'cancel-text' => 'Cancelar',
		'label' => 'Es la imagen de favicon aparece en el "tab" del explorador. Se recomienda subir imágenes de al menos 32 x 32 px'
	]) ?>
	<span class="display-6">Imagen de redes</span>
	<?php echo $this->BForm->input('website_share_image',[
		'value' => $this->Settings->get('website_share_image'),
		'input' => 'image',
		'add-text' => 'Subir una foto',
		'remove-text' => 'Remover imagen',
		'change-text' => 'Subir una foto nueva',
		'cancel-text' => 'Cancelar',
		'label' => 'Es la imagen que facebook o twitter pone cuando compartes el sitio. Se recomienda subir imágenes de al menos 600 x 400 px'
	]) ?>
</div>
<div class="container-full">
	<div class="bg-lightest p-t-1">
	</div>
</div>
<div class="website-front">
	<h2>Apariencia del sitio</h2>
	<div class="row">
		<div class="col-sm-6">
			<span class="display-6">Video principal</span>
			<?php echo $this->BForm->input('website_front_video',[
				'value' => $this->Settings->get('website_front_video'),
				'input' => 'video',
				'accepts' => 'vide/mp4',
				'add-text' => 'Subir un video',
				'remove-text' => 'Remover video',
				'change-text' => 'Subir un video nuevo',
				'cancel-text' => 'Cancelar',
				'label' => 'Es el video que aparece al fondo del sitio web principal. Con formato de mp4 con codec h264 no mayor a 35MB'
			]) ?>
			<span class="display-6">Texto principal</span>
			<?php echo $this->BForm->input('website_front_text',['value' => $this->Settings->get('website_front_text'), 'label' => 'Escribe el copy de la pantalla principal']) ?>
		</div>
		<div class="col-sm-6">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<span class="display-6">Imagen principal</span>
			<?php echo $this->BForm->input('website_front_image',[
				'value' => $this->Settings->get('website_front_image'),
				'input' => 'image',
				'add-text' => 'Subir una foto',
				'remove-text' => 'Remover imagen',
				'change-text' => 'Subir una foto nueva',
				'cancel-text' => 'Cancelar',
				'label' => 'Es la imagen que aparece al principio del sitio web en caso de no haber video. Se recomienda subir imágenes de al menos 1,600 x 900 px'
			]) ?>
			<hr>
			<span class="display-6">Imagen Centro</span>
			<?php echo $this->BForm->input('website_front_logo',[
				'value' => $this->Settings->get('website_front_logo'),
				'input' => 'image',
				'add-text' => 'Subir una foto',
				'remove-text' => 'Remover imagen',
				'change-text' => 'Subir una foto nueva',
				'cancel-text' => 'Cancelar',
				'label' => 'Es la imagen que aparece al centro. Se recomienda subir imágenes de al menos 600 x 300 px'
			]) ?>
		</div>
		<div class="col-sm-6">
		</div>
	</div>
</div>
<?php /*
<div class="container-full">
	<div class="bg-lightest p-t-1">
	</div>
</div>
<div class="website-footer">
	<h2>Información de contacto</h2>
	<span class="display-6">Son los datos de contacto y redes sociales que aparecen al final de cada página.</span>
	<?php
	//	$arr = ['facebook','instagram','youtube','twitter','applemusic','spotify'];
	?>
	<div class="row">
		<div class="col-sm-6">
			<?php foreach(['facebook','instagram','youtube'] as $n => $social): ?>
				<?php echo $this->BForm->input("social_url_$social",['value' => $this->Settings->get("social_url_$social"), 'label' => 'URL de '.ucfirst($social)]) ?>
			<?php endforeach; ?>
		</div>
		<div class="col-sm-6">
			<?php foreach(['twitter','applemusic','spotify'] as $n => $social): ?>
				<?php echo $this->BForm->input("social_url_$social",['value' => $this->Settings->get("social_url_$social"), 'label' => 'URL de '.ucfirst($social)]) ?>
			<?php endforeach; ?>
		</div>
	</div>
	<hr>
</div>
<?php */
echo $this->BForm->submit('Guardar cambios',['class' => 'btn btn-primary']);
echo $this->BForm->end();
?>