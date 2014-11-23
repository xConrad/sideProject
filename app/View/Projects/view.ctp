
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $project['Project']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?> </li>

				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="projects view">

			<h2><?php  echo __('Project'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($project['Project']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Project'); ?></strong></td>
		<td>
			<?php echo h($project['Project']['title']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Usines'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($project['Usines']['name'], array('controller' => 'usines', 'action' => 'view', $project['Usines']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Clients'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($project['Clients']['name'], array('controller' => 'clients', 'action' => 'view', $project['Clients']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Materials'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($project['Materials']['name'], array('controller' => 'materials', 'action' => 'view', $project['Materials']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
