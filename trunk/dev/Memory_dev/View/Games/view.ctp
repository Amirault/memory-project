<div class="games view">
<h2><?php echo __('Game'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($game['Game']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Difficulty'); ?></dt>
		<dd>
			<?php echo $this->Html->link($game['Difficulty']['id'], array('controller' => 'difficulties', 'action' => 'view', $game['Difficulty']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($game['Game']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TypeOfGame'); ?></dt>
		<dd>
			<?php echo h($game['Game']['typeOfGame']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsPending'); ?></dt>
		<dd>
			<?php echo h($game['Game']['isPending']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NumberOfPlayers'); ?></dt>
		<dd>
			<?php echo h($game['Game']['numberOfPlayers']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NumberMaximumOfPlayers'); ?></dt>
		<dd>
			<?php echo h($game['Game']['numberMaximumOfPlayers']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CurrentPlayer'); ?></dt>
		<dd>
			<?php echo h($game['Game']['currentPlayer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HostPlayer'); ?></dt>
		<dd>
			<?php echo h($game['Game']['hostPlayer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($game['Game']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($game['Game']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Game'), array('action' => 'edit', $game['Game']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Game'), array('action' => 'delete', $game['Game']['id']), null, __('Are you sure you want to delete # %s?', $game['Game']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Difficulties'), array('controller' => 'difficulties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Difficulty'), array('controller' => 'difficulties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Game Cards'), array('controller' => 'game_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game Card'), array('controller' => 'game_cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Game Players'), array('controller' => 'game_players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game Player'), array('controller' => 'game_players', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Game Cards'); ?></h3>
	<?php if (!empty($game['GameCard'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Game Id'); ?></th>
		<th><?php echo __('Card Id'); ?></th>
		<th><?php echo __('Position X'); ?></th>
		<th><?php echo __('Position Y'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($game['GameCard'] as $gameCard): ?>
		<tr>
			<td><?php echo $gameCard['id']; ?></td>
			<td><?php echo $gameCard['game_id']; ?></td>
			<td><?php echo $gameCard['card_id']; ?></td>
			<td><?php echo $gameCard['position_x']; ?></td>
			<td><?php echo $gameCard['position_y']; ?></td>
			<td><?php echo $gameCard['created']; ?></td>
			<td><?php echo $gameCard['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'game_cards', 'action' => 'view', $gameCard['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'game_cards', 'action' => 'edit', $gameCard['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'game_cards', 'action' => 'delete', $gameCard['id']), null, __('Are you sure you want to delete # %s?', $gameCard['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Game Card'), array('controller' => 'game_cards', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Game Players'); ?></h3>
	<?php if (!empty($game['GamePlayer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Player Id'); ?></th>
		<th><?php echo __('Game Id'); ?></th>
		<th><?php echo __('MasterCard'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($game['GamePlayer'] as $gamePlayer): ?>
		<tr>
			<td><?php echo $gamePlayer['id']; ?></td>
			<td><?php echo $gamePlayer['player_id']; ?></td>
			<td><?php echo $gamePlayer['game_id']; ?></td>
			<td><?php echo $gamePlayer['masterCard']; ?></td>
			<td><?php echo $gamePlayer['created']; ?></td>
			<td><?php echo $gamePlayer['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'game_players', 'action' => 'view', $gamePlayer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'game_players', 'action' => 'edit', $gamePlayer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'game_players', 'action' => 'delete', $gamePlayer['id']), null, __('Are you sure you want to delete # %s?', $gamePlayer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Game Player'), array('controller' => 'game_players', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
