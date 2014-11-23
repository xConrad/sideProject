
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Rapport'), array('action' => 'edit', $rapport['Rapport']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Rapport'), array('action' => 'delete', $rapport['Rapport']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $rapport['Rapport']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Rapports'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Rapport'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Avenants'), array('controller' => 'avenants', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Avenants'), array('controller' => 'avenants', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Clients'), array('controller' => 'clients', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Projects'), array('controller' => 'projects', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="rapports view">

			<h2><?php  echo __('Rapport'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($rapport['Rapport']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Avenants'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($rapport['Avenants']['id'], array('controller' => 'avenants', 'action' => 'view', $rapport['Avenants']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Clients'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($rapport['Clients']['name'], array('controller' => 'clients', 'action' => 'view', $rapport['Clients']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Projects'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($rapport['Projects']['title'], array('controller' => 'projects', 'action' => 'view', $rapport['Projects']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
