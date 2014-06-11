<div class="gameCards view">
<h2><?php echo __('Game Card'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($gameCard['GameCard']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Game'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gameCard['Game']['name'], array('controller' => 'games', 'action' => 'view', $gameCard['Game']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gameCard['Card']['id'], array('controller' => 'cards', 'action' => 'view', $gameCard['Card']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position X'); ?></dt>
		<dd>
			<?php echo h($gameCard['GameCard']['position_x']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position Y'); ?></dt>
		<dd>
			<?php echo h($gameCard['GameCard']['position_y']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsFlippedUp'); ?></dt>
		<dd>
			<?php echo h($gameCard['GameCard']['isFlippedUp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsGone'); ?></dt>
		<dd>
			<?php echo h($gameCard['GameCard']['isGone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($gameCard['GameCard']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($gameCard['GameCard']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Game Card'), array('action' => 'edit', $gameCard['GameCard']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Game Card'), array('action' => 'delete', $gameCard['GameCard']['id']), null, __('Are you sure you want to delete # %s?', $gameCard['GameCard']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Game Cards'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game Card'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
