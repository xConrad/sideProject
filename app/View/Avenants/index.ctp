
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New Avenant'), array('action' => 'add'), array('class' => '')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index'), array('class' => '')); ?></li>				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="avenants index">
		
			<h2><?php echo __('Avenants'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('avenant_name'); ?></th>
							<th><?php echo $this->Paginator->sort('avenant_date'); ?></th>
							<th><?php echo $this->Paginator->sort('avenant_description'); ?></th>
							<th><?php echo $this->Paginator->sort('project_id'); ?></th>
							<th><?php echo $this->Paginator->sort('status_id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($avenants as $avenant): ?>
	<tr>
		<td><?php echo h($avenant['Avenant']['id']); ?>&nbsp;</td>
		<td><?php echo h($avenant['Avenant']['avenant_name']); ?>&nbsp;</td>
		<td><?php echo h($avenant['Avenant']['avenant_date']); ?>&nbsp;</td>
		<td><?php echo h($avenant['Avenant']['avenant_description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($avenant['Projects']['title'], array('controller' => 'projects', 'action' => 'view', $avenant['Projects']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($avenant['Status']['title'], array('controller' => 'statuses', 'action' => 'view', $avenant['Status']['id'])); ?>
		</td>
		<td class="actions">
			
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $avenant['Avenant']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $avenant['Avenant']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $avenant['Avenant']['id'])); ?>
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