<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			echo $this->Html->charset();
			
			//Instead of `$this->Layout->viewport()`
			echo $this->Html->meta(['content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no', 'name' => 'viewport']);
			
			//Instead of `$this->Html->title()`
			echo $this->Html->tag('title', $this->fetch('title'));
			
			echo $this->fetch('meta');
			
			echo $this->Html->css([
				'/vendor/font-awesome/css/font-awesome.min',
				'MeCms.login/bootstrap.min',
				'MeTools.default',
				'MeCms.login/layout'
			], ['block' => TRUE]);
			echo $this->fetch('css');
			
			echo $this->fetch('script');
		?>
	</head>
	<body>
		<div id="content" class="container">
			<?php
				//Check if the logo image exists
				if(is_readable(WWW_ROOT.'img'.DS.($logo = \Cake\Core\Configure::read('MeCms.frontend.logo'))))
					echo $this->Html->image($logo, ['id' => 'logo']);
				
				echo $this->Flash->render();
				echo $this->Flash->render('auth');
				echo $this->fetch('content');
			?>
		</div>
		<?= $this->fetch('css_bottom') ?>
		<?=	$this->fetch('script_bottom') ?>
	</body>
</html>