<?php
/**
 * Ioncube & Database Bridge
 * Digunakan untuk menangani fungsi Ioncube yang hilang dan menyuntikkan setting database
 */

// 1. Alias fungsi Ioncube
if (!function_exists('_il_exec') && function_exists('_dyuweyrj4')) {
    function _il_exec() {
        return call_user_func_array('_dyuweyrj4', func_get_args());
    }
}

// 2. Suntikan Database (Bypass config folder integrity check)
// Kita buat variabel global yang akan dibaca oleh CodeIgniter
global $db;
if (!isset($db)) {
    $db = array();
}

// Gunakan 'default' karena ini yang ada di Coolify Anda
$db['default'] = array(
    'dsn'      => '',
    'hostname' => 'pc80okgks0ocw8kcowogckkk',
    'username' => 'root',
    'password' => 'j6ldBKvb8L7xiydSLkO8mr6ng8eIyn7zXqLMGUBqhz9Ynec2IiVNXmharN0JN7wU',
    'database' => 'default',
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

// Pastikan BASEPATH aman
if (!defined('BASEPATH')) {
    // Jangan definisikan di sini agar tidak merusak sistem login CI sesudahnya
}
