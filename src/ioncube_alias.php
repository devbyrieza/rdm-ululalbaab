<?php
/**
 * Ioncube & Database Bridge + Debugger
 */

// 1. Alias fungsi Ioncube
if (!function_exists('_il_exec') && function_exists('_dyuweyrj4')) {
    function _il_exec() {
        return call_user_func_array('_dyuweyrj4', func_get_args());
    }
}

// 2. Logging untuk Debug
$log_file = dirname(__FILE__) . '/debug_rdm.log';
function rdm_log($msg) {
    global $log_file;
    file_put_contents($log_file, "[" . date('Y-m-d H:i:s') . "] " . $msg . "\n", FILE_APPEND);
}

rdm_log("Request started: " . $_SERVER['REQUEST_URI']);

// 3. Suntikan Database
global $db;
if (!isset($db)) {
    $db = array();
}

$db_config = array(
    'dsn'      => '',
    'hostname' => 'pc80okgks0ocw8kcowogckkk',
    'username' => 'root',
    'password' => 'j6ldBKvb8L7xiydSLkO8mr6ng8eIyn7zXqLMGUBqhz9Ynec2IiVNXmharN0JN7wU',
    'database' => 'rdm_ululalbaab', // Coba ganti ke rdm_ululalbaab
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

$db['default'] = $db_config;
rdm_log("Database config injected into global \$db");

// 4. Deteksi jika tertimpa
register_shutdown_function(function() {
    global $db;
    rdm_log("Request finished. Final DB Database: " . ($db['default']['database'] ?? 'NOT SET'));
});
