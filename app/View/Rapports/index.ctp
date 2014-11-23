
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New Rapport'), array('action' => 'add'), array('class' => '')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Avenants'), array('controller' => 'avenants', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index'), array('class' => '')); ?></li>  
				<li class="list-group-item"><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index'), array('class' => '')); ?></li> 
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="rapports index">
		
			<h2><?php echo __('Rapports'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('#PROJET'); ?></th>
							<th><?php echo $this->Paginator->sort('Contrats'); ?></th>
							<th><?php echo $this->Paginator->sort('AVENANT#'); ?></th>
							<th><?php echo $this->Paginator->sort('REFERENCE CLIENT'); ?></th>
							<th><?php echo $this->Paginator->sort('DESCRIPTION'); ?></th>
							<th><?php echo $this->Paginator->sort('CLIENT'); ?></th>
							<th><?php echo $this->Paginator->sort('STATUT (1-suspens, 2-approuv,3-declin)'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($rapports as $rapport): ?>
	<tr>
		<td><?php echo $this->Html->link($rapport['Projects']['id'], array('controller' => 'projects', 'action' => 'view', $rapport['Projects']['id'])); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rapport['Avenants']['avenant_name'], array('controller' => 'avenants', 'action' => 'view', $rapport['Avenants']['id'])); ?>
		</td>
				<td>
			<?php echo $this->Html->link($rapport['Avenants']['id'], array('controller' => 'avenants', 'action' => 'view', $rapport['Avenants']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($rapport['Clients']['Reference'], array('controller' => 'clients', 'action' => 'view', $rapport['Clients']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($rapport['Projects']['title'], array('controller' => 'projects', 'action' => 'view', $rapport['Projects']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($rapport['Clients']['name'], array('controller' => 'clients', 'action' => 'view', $rapport['Clients']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($rapport['Avenants']['status_id'], array('controller' => 'avenants', 'action' => 'view', $rapport['Avenants']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rapport['Rapport']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rapport['Rapport']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $rapport['Rapport']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>
			</small></p>

			<ul class="pagination">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->