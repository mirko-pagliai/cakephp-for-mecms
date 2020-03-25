<?php
declare(strict_types=1);

use Cake\Core\Configure;

putenv('SECURITY_SALT=a-long-but-not-random-value');

require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/config/bootstrap.php';

Configure::write('App.fullBaseUrl', 'http://localhost');

$_SERVER['PHP_SELF'] = '/';

// Fixate sessionid early on, as php7.2+
// does not allow the sessionid to be set after stdout
// has been written to.
session_id('cli');
