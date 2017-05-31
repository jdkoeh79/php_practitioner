<?php 

require 'functions.php';
$config = require 'config.php';
require 'core/classes/Router.php';
require 'core/classes/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/classes/Task.php';


return new QueryBuilder(Connection::make($config['database']));