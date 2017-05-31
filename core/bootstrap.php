<?php 

$app = [];

$app['config'] = require 'config.php';

require 'functions.php';
require 'core/classes/Router.php';
require 'core/classes/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/classes/Task.php';


$app['database'] = new QueryBuilder(
	Connection::make($app['config']['database'])
);