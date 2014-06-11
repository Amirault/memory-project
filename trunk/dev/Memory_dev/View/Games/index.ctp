<div class="games index">
	<h2><?php echo __('Games'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('difficulty_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('gameType_id'); ?></th>
			<th><?php echo $this->Paginator->sort('isPending'); ?></th>
			<th><?php echo $this->Paginator->sort('numberMaximumOfPlayers'); ?></th>
			<th><?php echo $this->Paginator->sort('currentPlayer'); ?></th>
			<th><?php echo $this->Paginator->sort('player_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($games as $game): ?>
	<tr>
		<td><?php echo h($game['Game']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($game['Difficulty']['name'], array('controller' => 'difficulties', 'action' => 'view', $game['Difficulty']['id'])); ?>
		</td>
		<td><?php echo h($game['Game']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($game['GameType']['name'], array('controller' => 'game_types', 'action' => 'view', $game['GameType']['id'])); ?>
		</td>
		<td><?php echo h($game['Game']['isPending']); ?>&nbsp;</td>
		<td><?php echo h($game['Game']['numberMaximumOfPlayers']); ?>&nbsp;</td>
		<td><?php echo h($game['Game']['currentPlayer']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($game['Player']['id'], array('controller' => 'players', 'action' => 'view', $game['Player']['id'])); ?>
		</td>
		<td><?php echo h($game['Game']['created']); ?>&nbsp;</td>
		<td><?php echo h($game['Game']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $game['Game']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $game['Game']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $game['Game']['id']), null, __('Are you sure you want to delete # %s?', $game['Game']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Game'), array('action' => 'add')); ?></li>
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
