<?php


$conf->server_name = 'localhost';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/Credit-Calc-8';
$conf->app_url = $conf->server_url.$conf->app_root;

$conf->root_path = dirname(__FILE__);
$conf->action_root = $conf->app_root.'/control.php?action=';
$conf->action_url = $conf->server_url.$conf->action_root;

$conf -> db_type = 'mysql';
$conf -> db_name = 'calc';
$conf -> db_server = 'localhost';
$conf -> db_user = 'root';
$conf -> db_pass = '';
$conf -> db_charset = 'utf8';
$conf -> db_collation = 'utf8_polish_ci';
$conf -> db_port = '3306';
$conf -> db_option = [ PDO::ATTR_CASE => PDO::CASE_NATURAL, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

