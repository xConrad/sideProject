
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Employe'), array('action' => 'edit', $employe['Employe']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Employe'), array('action' => 'delete', $employe['Employe']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $employe['Employe']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Employes'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Employe'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Titles'), array('controller' => 'titles', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Titles'), array('controller' => 'titles', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="employes view">

			<h2><?php  echo __('Employe'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($employe['Employe']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('First Name'); ?></strong></td>
		<td>
			<?php echo h($employe['Employe']['first_name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Last Name'); ?></strong></td>
		<td>
			<?php echo h($employe['Employe']['last_name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Titles'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($employe['Titles']['title'], array('controller' => 'titles', 'action' => 'view', $employe['Titles']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
