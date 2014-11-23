
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Avenant'), array('action' => 'edit', $avenant['Avenant']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Avenant'), array('action' => 'delete', $avenant['Avenant']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $avenant['Avenant']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Avenants'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="avenants view">

			<h2><?php  echo __('Avenant'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($avenant['Avenant']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Avenant Name'); ?></strong></td>
		<td>
			<?php echo h($avenant['Avenant']['avenant_name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Avenant Date'); ?></strong></td>
		<td>
			<?php echo h($avenant['Avenant']['avenant_date']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Avenant Description'); ?></strong></td>
		<td>
			<?php echo h($avenant['Avenant']['avenant_description']); ?>
			&nbsp;
		</td>
</tr><tr>		
</tr><tr>		<td><strong><?php echo __('Status'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($avenant['Status']['title'], array('controller' => 'statuses', 'action' => 'view', $avenant['Status']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
