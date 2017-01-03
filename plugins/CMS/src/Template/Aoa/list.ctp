<?php
/**
 * Aoa list (view) : Simple responsive elements with table for some ORM object
 *
 * The content in the table depends of the entity description
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

//Assign the view's title at the header
$this->assign('title', "$controller | $action");

?>
<div class="page-header">
	<h1><?php msg(Inflector::humanize(Inflector::underscore($controller))) ?> <small><?php msg(Inflector::humanize(Inflector::underscore($action))) ?></small></h1>
</div>
<div class="page-toolbar m-b-1">
	<?php if(in_array("add", array_keys($actions))): ?>
	<div class="btn-group actions" role="group">		
		<?php echo $this->element('aoa/action-btn', ['controller' => $controller, 'action' => "add"]) ?>
	</div>
	<?php endif; ?>
</div>
<?php if(!$results || empty($results)):?>
<div class="table-empty">
	<h4></h4>
</div>	
<?php else: ?>
<div class="table-responsive">
	<table class="table table-striped table-bordered table-vertical-center">
		<thead>
			<tr>
				<?php foreach($fields as $field => $descriptor):
					if($descriptor['field_type']=='primary'):
						continue;
					endif;
				?>
					<th name="<?php echo $field ?>" 
						<?php
							foreach($descriptor as $key => $value):
								echo "$key=\"$value\" ";
							endforeach;
						?> 
					>
						<?php echo $this->Paginator->sort($field); ?>
					</th>
				<?php endforeach;?>
				<th class="actions">
					<span class="text-primary"><?php msg('Actions') ?></span>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($results as $index => $result): $primary_key = $result['id']; ?>
			<tr>
				<?php foreach($fields as $field => $descriptor):
					if($descriptor['primaryKey']):
						$primary_key = $result[$field];
					endif;
					if($descriptor['field_type']=='primary'):
						continue;
					endif;
				?>
					<td name="<?php echo $field ?>" 
						<?php
							foreach($descriptor as $key => $value):
								echo "$key=\"$value\" ";
							endforeach;
						?> 
					>
					<?php if(isset($result[$field])): ?>
						<?php if(isset($associations['belongsTo'][$field]['display']) && isset($associations['belongsTo'][$field]['propertyName'])): ?>
							<?php $cell_value = htmlentities($result[$associations['belongsTo'][$field]['propertyName']][$associations['belongsTo'][$field]['display']]) ?>
							<div class="<?php echo $cell_value=="" ? "empty":"" ?>"><?php echo $cell_value ?></div>
						<?php else: ?>
							<?php $cell_value = htmlentities($result[$field]) ?>
							<div class="<?php echo $cell_value=="" ? "empty":"" ?>"><?php echo $cell_value ?></div>
						<?php endif; ?>
					<?php endif;?>
					</td>
				<?php endforeach;?>
				<td class="actions">
					<div class="btn-group">
					<?php foreach($objectActions as $objectAction): ?>
						<?php echo $this->element('aoa/action-btn', ['controller' => $controller, 'action' => $objectAction, 'params' => [$primary_key]]) ?>
					<?php endforeach; ?>
					</div>
				</td>
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
<?php endif;?>
<?php if($this->Paginator->hasPrev() || $this->Paginator->hasNext()):?>
	<nav>
		<ul class="pagination">
			<?php 
				$this->Paginator->templates([
					'prevActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
					'number' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
					'current' => '<li class="page-item active"><a class="page-link" href="{{url}}">{{text}}</a></li>',
					'nextActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
				]);
				if($this->Paginator->hasPrev())
				echo $this->Paginator->prev('«');
				echo $this->Paginator->numbers();
				if($this->Paginator->hasNext())
				echo $this->Paginator->next('»')
			?>
		</ul>
	</nav>
<?php endif;?>