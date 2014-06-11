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
			<?php echo h($card['Card']['collection']); ?>
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
	</ul>
</div>
