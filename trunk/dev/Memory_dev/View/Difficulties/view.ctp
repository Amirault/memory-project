<div class="difficulties view">
<h2><?php echo __('Difficulty'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($difficulty['Difficulty']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($difficulty['Difficulty']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NumberOfPairs'); ?></dt>
		<dd>
			<?php echo h($difficulty['Difficulty']['numberOfPairs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CoefficientForPoint'); ?></dt>
		<dd>
			<?php echo h($difficulty['Difficulty']['CoefficientForPoint']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($difficulty['Difficulty']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($difficulty['Difficulty']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Difficulty'), array('action' => 'edit', $difficulty['Difficulty']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Difficulty'), array('action' => 'delete', $difficulty['Difficulty']['id']), null, __('Are you sure you want to delete # %s?', $difficulty['Difficulty']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Difficulties'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Difficulty'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Games'); ?></h3>
	<?php if (!empty($difficulty['Game'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Difficulty Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('TypeOfGame'); ?></th>
		<th><?php echo __('IsPending'); ?></th>
		<th><?php echo __('NumberOfPlayers'); ?></th>
		<th><?php echo __('NumberMaximumOfPlayers'); ?></th>
		<th><?php echo __('CurrentPlayer'); ?></th>
		<th><?php echo __('HostPlayer'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($difficulty['Game'] as $game): ?>
		<tr>
			<td><?php echo $game['id']; ?></td>
			<td><?php echo $game['difficulty_id']; ?></td>
			<td><?php echo $game['name']; ?></td>
			<td><?php echo $game['typeOfGame']; ?></td>
			<td><?php echo $game['isPending']; ?></td>
			<td><?php echo $game['numberOfPlayers']; ?></td>
			<td><?php echo $game['numberMaximumOfPlayers']; ?></td>
			<td><?php echo $game['currentPlayer']; ?></td>
			<td><?php echo $game['hostPlayer']; ?></td>
			<td><?php echo $game['created']; ?></td>
			<td><?php echo $game['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'games', 'action' => 'view', $game['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'games', 'action' => 'edit', $game['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'games', 'action' => 'delete', $game['id']), null, __('Are you sure you want to delete # %s?', $game['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
