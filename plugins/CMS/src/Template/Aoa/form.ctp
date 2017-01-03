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
$action 	= $this->request->params['action'];
//uncomment for static views
//$actions 	= ['index','add'];
//$results	= [['Alias' => ['field' => 'value']]];
//$fields 	= ['id' => 'biginteger', 'name' => 'string'];
//$associations = [];
?>
<div class="page-header">
	<h1><?php msg(Inflector::humanize(Inflector::underscore($controller))) ?> <small><?php msg(Inflector::humanize(Inflector::underscore($action))) ?></small></h1>
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
<?php foreach($associations['belongsToMany'] as $field => $belongsToMany): ?>
	<div class="form-group" propertyName="<?php echo $belongsToMany['propertyName'] ?>" foreignKey="<?php echo $belongsToMany['foreignKey'] ?>" targetForeignKey="<?php echo $belongsToMany['targetForeignKey'] ?>">
		<h3><?php echo $belongsToMany['propertyName'] ?></h3>
		<div class="row many-objects">
			<div class="col-sm-6">
				<div class="owned">
				<?php if(isset($entity[$belongsToMany['propertyName']]) && !empty($entity[$belongsToMany['propertyName']])) foreach($entity[$belongsToMany['propertyName']] as $object):
					$key = $object[$belongsToMany['key']];
					$display = $object[$belongsToMany['display']];
					if(isset($belongsToMany['results'][$key])) {
						unset($belongsToMany['results'][$key]);
					}
					?><a href="<?php echo "/{$belongsToMany['propertyName']}/edit/$key" ?>" key="<?php echo $key ?>" class="many-object label label-pill label-success">
						<span><?php echo $display ?></span>
						<i class="fa fa-times"></i>
						<input type="hidden" class="form-control" name="Speakers[<?php echo $key ?>][id]" id="speakers-<?php echo $key ?>-id" value="<?php echo $key ?>">
					</a><?php 
				endforeach; ?>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="available">
				<?php foreach($belongsToMany['results'] as $key => $display):
				?><a href="<?php echo "/{$belongsToMany['propertyName']}/edit/$key" ?>" key="<?php echo $key ?>" class="many-object label label-pill label-primary">
						<span><?php echo $display ?></span>
						<i class="fa fa-plus"></i>
						<input type="hidden" class="form-control" no-name="Speakers[<?php echo $key ?>][id]" id="speakers-<?php echo $key ?>-id" value="<?php echo $key ?>">
					</a><?php 
				endforeach; ?>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>
<?php
	echo $this->BForm->submit(translate(Inflector::humanize($action)),['class'=>'btn btn-primary']);
	echo $this->BForm->end();
?>	
	</div>
</div>