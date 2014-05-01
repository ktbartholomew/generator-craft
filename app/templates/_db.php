<?php

return array(
    '*' => array(
        'tablePrefix' => 'craft',
    ),
    'dev' => array(
        'server' => '<%= dbHost %>',
        'user' => '<%= dbUser %>',
        'password' => '<%= dbPass %>',
        'database' => '<%= dbName %>',
    ),
    // Treat *.vagrantshare.com the same as localhost
    'vagrantshare' => array(
        'server' => '<%= dbHost %>',
        'user' => '<%= dbUser %>',
        'password' => '<%= dbPass %>',
        'database' => '<%= dbName %>',
    ),
    'staging' => array(
        'server' => 'localhost',
        'user' => '',
        'password' => '',
        'database' => '',
    ),
    '.com' => array(
        'server' => 'localhost',
        'user' => '',
        'password' => '',
        'database' => '',
    ),
);
