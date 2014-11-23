
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Status'), array('action' => 'edit', $status['Status']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Status'), array('action' => 'delete', $status['Status']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $status['Status']['id'])); ?> </li>

				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="statuses view">

			<h2><?php  echo __('Status'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($status['Status']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Status Name'); ?></strong></td>
		<td>
			<?php echo h($status['Status']['title']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
