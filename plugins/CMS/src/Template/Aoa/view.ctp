<?php
/**
 * Aoa view (view) : Simple responsive descriptor for entity - ORM object
 *
 * The content in the view depends of the entity description
 *
 * @copyright     Pewpew (2015)
 * @link          http://pewpew.mx Pewpew (2015)
 */

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
<dl class="dl-horizontal">
	<?php foreach($fields as $field => $descriptor):
			if($descriptor['field_type']=='primary'):
				continue;
			endif;
		?>
		<?php if(isset($associations['belongsTo'][$field]) && isset($associations['belongsTo'][$field]['results'][$entity[$field]]) && $associations['belongsTo'][$field]['results'][$entity[$field]]!=""): ?>
			<dt class="col-sm-3"><?php msg(humanize(str_replace("_id", '', $field))) ?>&nbsp;</dt>
			<dd class="col-sm-9"><?php msg($associations['belongsTo'][$field]['results'][$entity[$field]]) ?>&nbsp;</dd>
		<?php else: ?>
			<dt class="col-sm-3"><?php msg(humanize($field)) ?>&nbsp;</dt>
			<dd class="col-sm-9"><?php msg($entity[$field]) ?>&nbsp;</dd>
		<?php endif; ?>
	<?php endforeach;?>
</dl>