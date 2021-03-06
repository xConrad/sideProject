
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Payemployer'), array('action' => 'edit', $payemployer['Payemployer']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Payemployer'), array('action' => 'delete', $payemployer['Payemployer']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $payemployer['Payemployer']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Payemployers'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Payemployer'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Titles'), array('controller' => 'titles', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Titles'), array('controller' => 'titles', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="payemployers view">

			<h2><?php  echo __('Payemployer'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($payemployer['Payemployer']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Pay'); ?></strong></td>
		<td>
			<?php echo h($payemployer['Payemployer']['pay']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Pay Supp'); ?></strong></td>
		<td>
			<?php echo h($payemployer['Payemployer']['pay_supp']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Titles'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($payemployer['Titles']['title'], array('controller' => 'titles', 'action' => 'view', $payemployer['Titles']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
