<div class="difficulties form">
<?php echo $this->Form->create('Difficulty'); ?>
	<fieldset>
		<legend><?php echo __('Add Difficulty'); ?></legend>
	<?php
		echo $this->Form->input('nom');
		echo $this->Form->input('numberOfPairs');
		echo $this->Form->input('CoefficientForPoint');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Difficulties'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
	</ul>
</div>
