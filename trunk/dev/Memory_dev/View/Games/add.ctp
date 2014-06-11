<div class="games form">
<?php echo $this->Form->create('Game'); ?>
	<fieldset>
		<legend><?php echo __('Add Game'); ?></legend>
	<?php
		echo $this->Form->input('difficulty_id');
		echo $this->Form->input('name');
		echo $this->Form->input('gameType_id');
		echo $this->Form->input('isPending');
		echo $this->Form->input('numberMaximumOfPlayers');
		echo $this->Form->input('currentPlayer');
		echo $this->Form->input('player_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Games'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Difficulties'), array('controller' => 'difficulties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Difficulty'), array('controller' => 'difficulties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Game Types'), array('controller' => 'game_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game Type'), array('controller' => 'game_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Game Cards'), array('controller' => 'game_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game Card'), array('controller' => 'game_cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Game Players'), array('controller' => 'game_players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game Player'), array('controller' => 'game_players', 'action' => 'add')); ?> </li>
	</ul>
</div>
