<?php
defined('SYSPATH') or die('No direct access allowed.');

return array
(
    'default' => array
    (
        'type' => 'mysql',
        'connection' => array(
            'hostname' => 'localhost',
            'username' => 'root',
            'password' => '',
            'persistent' => FALSE,
            'database' => 'base',
        ),
        'table_prefix' => '',
        'charset' => 'utf8',
        'profiling' => TRUE,
    ),
);
?>