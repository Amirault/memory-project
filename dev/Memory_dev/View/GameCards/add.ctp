<div class="gameCards form">
<?php echo $this->Form->create('GameCard'); ?>
	<fieldset>
		<legend><?php echo __('Add Game Card'); ?></legend>
	<?php
		echo $this->Form->input('game_id');
		echo $this->Form->input('card_id');
		echo $this->Form->input('position_x');
		echo $this->Form->input('position_y');
		echo $this->Form->input('isFlippedUp');
		echo $this->Form->input('isGone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Game Cards'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
