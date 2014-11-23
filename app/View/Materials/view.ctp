
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Material'), array('action' => 'edit', $material['Material']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Material'), array('action' => 'delete', $material['Material']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $material['Material']['id'])); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="materials view">

			<h2><?php  echo __('Material'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($material['Material']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($material['Material']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Tarifs'); ?></strong></td>
		<td>
			<?php echo h($material['Material']['tarifs']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Category Id'); ?></strong></td>
		<td>
			<?php echo h($material['Material']['category_id']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
