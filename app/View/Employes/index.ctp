
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New Employe'), array('action' => 'add'), array('class' => '')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Titles'), array('controller' => 'titles', 'action' => 'index'), array('class' => '')); ?></li> 
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="employes index">
		
			<h2><?php echo __('Employes'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('first_name'); ?></th>
							<th><?php echo $this->Paginator->sort('last_name'); ?></th>
							<th><?php echo $this->Paginator->sort('titles_id'); ?></th>
							<th><?php echo $this->Paginator->sort('regular pay'); ?></th>
							<th><?php echo $this->Paginator->sort('overtime pay'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($employes as $employe): ?>
	<tr>
		<td><?php echo h($employe['Employe']['id']); ?>&nbsp;</td>
		<td><?php echo h($employe['Employe']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($employe['Employe']['last_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($employe['Titles']['title'], array('controller' => 'titles', 'action' => 'view', $employe['Titles']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($employe['Titles']['pay_regulier'], array('controller' => 'Titles', 'action' => 'view', $employe['Titles']['id'])); ?>
		</td>
				<td>
			<?php echo $this->Html->link($employe['Titles']['pay_supp'], array('controller' => 'Titles', 'action' => 'view', $employe['Titles']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employe['Employe']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employe['Employe']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $employe['Employe']['id'])); ?>
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