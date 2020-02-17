<?php

require 'core/Database/QueryBuilder.php';

require 'core/Database/Connection.php';

require 'core/router.php';

$config = require 'config.php';

return new QueryBuilder(Connection::make($config['database']));
 ?>
