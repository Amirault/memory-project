<div class="gamePlayers form">
<?php echo $this->Form->create('GamePlayer'); ?>
	<fieldset>
		<legend><?php echo __('Edit Game Player'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('player_id');
		echo $this->Form->input('game_id');
		echo $this->Form->input('masterCard');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GamePlayer.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('GamePlayer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Game Players'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
	</ul>
</div>
