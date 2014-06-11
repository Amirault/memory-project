<div class="gamePlayers index">
	<h2><?php echo __('Game Players'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('player_id'); ?></th>
			<th><?php echo $this->Paginator->sort('game_id'); ?></th>
			<th><?php echo $this->Paginator->sort('card_id'); ?></th>
			<th><?php echo $this->Paginator->sort('points'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($gamePlayers as $gamePlayer): ?>
	<tr>
		<td><?php echo h($gamePlayer['GamePlayer']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($gamePlayer['Player']['id'], array('controller' => 'players', 'action' => 'view', $gamePlayer['Player']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($gamePlayer['Game']['name'], array('controller' => 'games', 'action' => 'view', $gamePlayer['Game']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($gamePlayer['Card']['id'], array('controller' => 'cards', 'action' => 'view', $gamePlayer['Card']['id'])); ?>
		</td>
		<td><?php echo h($gamePlayer['GamePlayer']['points']); ?>&nbsp;</td>
		<td><?php echo h($gamePlayer['GamePlayer']['created']); ?>&nbsp;</td>
		<td><?php echo h($gamePlayer['GamePlayer']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $gamePlayer['GamePlayer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $gamePlayer['GamePlayer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $gamePlayer['GamePlayer']['id']), null, __('Are you sure you want to delete # %s?', $gamePlayer['GamePlayer']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Game Player'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
