<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;

if(Configure::read('debug')):
    $this->layout = 'dev_error';
    $this->assign('title', $message);
    $this->assign('templateName', 'error400.ctp');
    $this->start('file');
?>

<?php if(!empty($error->queryString)): ?>
    <p class="notice"><strong>SQL Query</strong>: <?= h($error->queryString) ?></p>
<?php endif; ?>

<?php if(!empty($error->params)): ?>
	<strong>SQL Query Params</strong>: <?= Debugger::dump($error->params) ?>
<?php endif; ?>

<?= $this->element('auto_table_warning') ?>

<?php
    if(extension_loaded('xdebug'))
        xdebug_print_function_stack();
	
    $this->end();
else:
    $this->layout = 'error';
endif;
?>

<h2><?= h($message) ?></h2>
<p class="error">
    <strong>Error</strong>: 
    <?= sprintf('the requested address %s was not found on this server', $this->Html->tag('var', $url)) ?>
</p>