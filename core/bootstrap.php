<?php

$app =[];

require 'core/Database/QueryBuilder.php';

require 'core/Database/Connection.php';

require 'core/router.php';

require 'core/request.php';

$app['config'] = require 'config.php';

$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));
 ?>
