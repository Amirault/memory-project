<div class="cards form">
<?php echo $this->Form->create('Card'); ?>
	<fieldset>
		<legend><?php echo __('Edit Card'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pathOfImage');
		echo $this->Form->input('card_id');
		echo $this->Form->input('collection_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Card.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Card.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cards'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Collections'), array('controller' => 'collections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Collection'), array('controller' => 'collections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Game Players'), array('controller' => 'game_players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game Player'), array('controller' => 'game_players', 'action' => 'add')); ?> </li>
	</ul>
</div>
