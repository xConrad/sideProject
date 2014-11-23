<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button><!-- /.navbar-toggle -->
		<?php echo $this->Html->Link('stageProject', '', array('class' => 'navbar-brand')); ?>
	</div><!-- /.navbar-header -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li><?php echo $this->Html->Link('Avenants', array('controller' => 'avenants', 'action' => 'index'))?></li>
			<li><?php echo $this->Html->Link('Projets', array('controller' => 'projects', 'action' => 'index'))?></li>
			<li><?php echo $this->Html->Link('Employers', array('controller' => 'employes', 'action' => 'index'))?></li>
			<li><?php echo $this->Html->Link('Categories', array('controller' => 'categories', 'action' => 'index'))?></li>
			<li><?php echo $this->Html->Link('Rapports', array('controller' => 'rapports', 'action' => 'index'))?></li>
		</ul><!-- /.nav navbar-nav -->
	</div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->