<div class="cards view">
<h2><?php echo __('Card'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($card['Card']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PathOfImage'); ?></dt>
		<dd>
			<?php echo h($card['Card']['pathOfImage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Collection'); ?></dt>
		<dd>
			<?php echo $this->Html->link($card['Collection']['name'], array('controller' => 'collections', 'action' => 'view', $card['Collection']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($card['Card']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($card['Card']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Card'), array('action' => 'edit', $card['Card']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Card'), array('action' => 'delete', $card['Card']['id']), null, __('Are you sure you want to delete # %s?', $card['Card']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Collections'), array('controller' => 'collections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Collection'), array('controller' => 'collections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Game Players'), array('controller' => 'game_players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game Player'), array('controller' => 'game_players', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Game Players'); ?></h3>
	<?php if (!empty($card['GamePlayer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Player Id'); ?></th>
		<th><?php echo __('Game Id'); ?></th>
		<th><?php echo __('Card Id'); ?></th>
		<th><?php echo __('Points'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($card['GamePlayer'] as $gamePlayer): ?>
		<tr>
			<td><?php echo $gamePlayer['id']; ?></td>
			<td><?php echo $gamePlayer['player_id']; ?></td>
			<td><?php echo $gamePlayer['game_id']; ?></td>
			<td><?php echo $gamePlayer['card_id']; ?></td>
			<td><?php echo $gamePlayer['points']; ?></td>
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
