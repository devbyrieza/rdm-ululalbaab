<?php
/**
 * Ioncube, Database & HTTPS Bridge
 */

// 1. Alias fungsi Ioncube
if (!function_exists('_il_exec') && function_exists('_dyuweyrj4')) {
    function _il_exec() {
        return call_user_func_array('_dyuweyrj4', func_get_args());
    }
}

// 2. Paksa HTTPS (Fix Mixed Content / Stuck 100% Loading)
$_SERVER['HTTPS'] = 'on';
$_SERVER['SERVER_PORT'] = 443;

// 3. Suntikan Database
global $db, $config;
if (!isset($db)) { $db = array(); }
if (!isset($config)) { $config = array(); }

// Paksa base_url agar pakai HTTPS
$config['base_url'] = 'https://rdm.alandalus-ululalbaab.com/';

$db['default'] = array(
    'dsn'      => '',
    'hostname' => 'pc80okgks0ocw8kcowogckkk',
    'username' => 'root',
    'password' => 'j6ldBKvb8L7xiydSLkO8mr6ng8eIyn7zXqLMGUBqhz9Ynec2IiVNXmharN0JN7wU',
    'database' => 'rdm_ululalbaab',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => TRUE,
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt'  => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

// Hapus logging agar kencang
// rdm_log("..."); 
