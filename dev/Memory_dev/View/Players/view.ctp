<div class="players view">
<h2><?php echo __('Player'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($player['Player']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Login'); ?></dt>
		<dd>
			<?php echo h($player['Player']['login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($player['Player']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Point'); ?></dt>
		<dd>
			<?php echo h($player['Player']['point']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NumberOfGames'); ?></dt>
		<dd>
			<?php echo h($player['Player']['numberOfGames']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NumberOfVictories'); ?></dt>
		<dd>
			<?php echo h($player['Player']['numberOfVictories']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($player['Player']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($player['Player']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Player'), array('action' => 'edit', $player['Player']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Player'), array('action' => 'delete', $player['Player']['id']), null, __('Are you sure you want to delete # %s?', $player['Player']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('action' => 'add')); ?> </li>
	</ul>
</div>
