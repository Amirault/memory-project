<div class="gamePlayers view">
<h2><?php echo __('Game Player'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($gamePlayer['GamePlayer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Player'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gamePlayer['Player']['id'], array('controller' => 'players', 'action' => 'view', $gamePlayer['Player']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Game'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gamePlayer['Game']['name'], array('controller' => 'games', 'action' => 'view', $gamePlayer['Game']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gamePlayer['Card']['id'], array('controller' => 'cards', 'action' => 'view', $gamePlayer['Card']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Points'); ?></dt>
		<dd>
			<?php echo h($gamePlayer['GamePlayer']['points']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($gamePlayer['GamePlayer']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($gamePlayer['GamePlayer']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Game Player'), array('action' => 'edit', $gamePlayer['GamePlayer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Game Player'), array('action' => 'delete', $gamePlayer['GamePlayer']['id']), null, __('Are you sure you want to delete # %s?', $gamePlayer['GamePlayer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Game Players'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game Player'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
