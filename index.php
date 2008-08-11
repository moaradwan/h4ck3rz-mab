<?php
require("classes/load.php");
Load::FromClasses('model_base');



# Startup tasks
require 'includes/startup.php';
$registry->set ('site_path', "/h4ck3rz-mab/");

# Common functions
Load::FromIncludes('common');

# Connect to DB
Load::FromClasses("dal");
$db = DatabaseFactory::GetDatabase("mysql","localhost","mab", "root", "");
$registry->set ('db', $db);

# Load template object
Load::FromClasses('template');
$template = new Template($registry);
$registry->set ('template', $template);

# Load router
Load::FromClasses('router');
$router = new Router($registry);
$registry->set ('router', $router);
$router->setPath (site_path . 'controllers');
$router->delegate();




//var_dump($registry);
?>