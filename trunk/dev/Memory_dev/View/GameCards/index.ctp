<div class="gameCards index">
	<h2><?php echo __('Game Cards'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('game_id'); ?></th>
			<th><?php echo $this->Paginator->sort('card_id'); ?></th>
			<th><?php echo $this->Paginator->sort('position_x'); ?></th>
			<th><?php echo $this->Paginator->sort('position_y'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($gameCards as $gameCard): ?>
	<tr>
		<td><?php echo h($gameCard['GameCard']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($gameCard['Game']['name'], array('controller' => 'games', 'action' => 'view', $gameCard['Game']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($gameCard['Card']['id'], array('controller' => 'cards', 'action' => 'view', $gameCard['Card']['id'])); ?>
		</td>
		<td><?php echo h($gameCard['GameCard']['position_x']); ?>&nbsp;</td>
		<td><?php echo h($gameCard['GameCard']['position_y']); ?>&nbsp;</td>
		<td><?php echo h($gameCard['GameCard']['created']); ?>&nbsp;</td>
		<td><?php echo h($gameCard['GameCard']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $gameCard['GameCard']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $gameCard['GameCard']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $gameCard['GameCard']['id']), null, __('Are you sure you want to delete # %s?', $gameCard['GameCard']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Game Card'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
