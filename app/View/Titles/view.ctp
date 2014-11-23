
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Title'), array('action' => 'edit', $title['Title']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Title'), array('action' => 'delete', $title['Title']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $title['Title']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Titles'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Title'), array('action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="titles view">

			<h2><?php  echo __('Title'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($title['Title']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Title'); ?></strong></td>
		<td>
			<?php echo h($title['Title']['title']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Pay Regulier'); ?></strong></td>
		<td>
			<?php echo h($title['Title']['pay_regulier']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Pay Supp'); ?></strong></td>
		<td>
			<?php echo h($title['Title']['pay_supp']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Category Id'); ?></strong></td>
		<td>
			<?php echo h($title['Title']['category_id']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
