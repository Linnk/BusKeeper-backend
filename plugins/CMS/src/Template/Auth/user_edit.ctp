<?php
/**
 * Aoa form (view) : Simple responsive elements with form to edit entity - ORM object
 *
 * The content in the form depends of the entity description
 *
 * @copyright     Pewpew (2015)
 * @link          http://pewpew.mx Pewpew (2015)
 */
 
use Cake\Utility\Inflector;

$controller = $this->request->params['controller'];
$action 	= "Edit";

?>
<div class="page-header">
	<h1><?php msg(Inflector::humanize($controller)) ?> <small><?php msg(Inflector::humanize($action)) ?></small></h1>
</div>
<div class="page-toolbar">
</div>
<div class="row">
	<div class="col-sm-8 col-sm-block">
<?php 
	echo $this->BForm->create($entity, ['type' => 'file']);
	foreach($fields as $field => $description):
		if(isset($associations['belongsTo'][$field])):
			$options = $associations['belongsTo'][$field]['results'];
			if($description['default']!==null):
				$default = $description['default'];
				$empty_text = isset($options[$default]) ? $options[$default]:"(".translate("empty").")";
				$options = [$default => $empty_text] + $options;
			endif;
			echo $this->BForm->input($field,array_merge([
				'id'=>Inflector::camelize(Inflector::singularize($alias)).Inflector::camelize($action).Inflector::camelize($field), 
				'options'=>$options,
				'placeholder'=>translate(Inflector::humanize($field))
			],$description));
		else:
			if(isset($description['default']) && $description['default']!==null && $entity->$field===null):
				$default = $description['default'];
				$entity->$field = $default;
			endif;
			echo $this->BForm->input($field,array_merge([
				'id'=>Inflector::camelize(Inflector::singularize($alias)).Inflector::camelize($action).Inflector::camelize($field), 
				'placeholder'=>translate(Inflector::humanize($field))
			],$description));
		endif;
	endforeach;
?>

<?php
	echo $this->BForm->submit(translate(Inflector::humanize('Save')),['class'=>'btn btn-primary']);
	echo $this->BForm->end();
?>	
	</div>
</div>