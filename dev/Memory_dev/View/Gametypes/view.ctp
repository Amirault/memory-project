<div class="gametypes view">
<h2><?php echo __('Gametype'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($gametype['Gametype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($gametype['Gametype']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($gametype['Gametype']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($gametype['Gametype']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Gametype'), array('action' => 'edit', $gametype['Gametype']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Gametype'), array('action' => 'delete', $gametype['Gametype']['id']), null, __('Are you sure you want to delete # %s?', $gametype['Gametype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Gametypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gametype'), array('action' => 'add')); ?> </li>
	</ul>
</div>
