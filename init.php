<?php

require_once 'core/Config.class.php';
$conf = new core\Config();
require_once 'config.php'; 

function &getConf(){
	  global $conf;
	  return $conf; 
	}


require_once 'core/Messages.class.php';
$msgs = new core\Messages();

function &getMessages(){
	  global $msgs;
	  return $msgs; 
	}


$smarty = null;	
function &getSmarty(){
	global $smarty;
	if (!isset($smarty)){
		
		include_once 'libs/smarty/Smarty.class.php';
		$smarty = new Smarty();	
	
		$smarty->assign('conf',getConf());
		$smarty->assign('msgs',getMessages());
		
		$smarty->setTemplateDir(array(
			'one' => getConf()->root_path.'/app/views',
			'two' => getConf()->root_path.'/app/views/templates'
		));
	}
	return $smarty;
}

require_once 'core/ClassLoader.class.php';
$cloader = new core\ClassLoader();
function &getLoader(){
	global $cloader;
	return $cloader;
}

require_once 'core/Router.class.php';
$router = new core\Router();
function &getRouter(): core\Router{
	global $router;
	return $router;
}

require_once 'core/functions.php';

$db = null;
function &getDB(){
	global $conf, $db;
	if (!isset($db)){
		require_once 'libs/Medoo/Medoo.class.php';
		$db = new \Medoo\Medoo([
			'database_type' => &$conf -> db_type,
			'database_name' => &$conf -> db_name,
			'server' => &$conf -> db_server,
			'username' => &$conf -> db_user,
			'password' => &$conf -> db_pass,
			'charset' => &$conf -> db_charset,
			'collation' => &$conf -> db_collation,
			'port' => &$conf->db_port,
			'option' => &$conf->db_option
		]);
	}
	return $db;
}

session_start();
$conf->roles = isset($_SESSION['_roles']) ? unserialize($_SESSION['_roles']) : array();

$router->setAction( getFromRequest('action') );