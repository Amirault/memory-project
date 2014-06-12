
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body style="background-image:url('img/bk.jpg');background-size:100%;height:100%;width:100%;overflow:hidden">

			<?php echo $this->fetch('content'); ?>

	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
