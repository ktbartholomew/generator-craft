<?php

return array(
    '*' => array(
        'omitScriptNameInUrls' => true,
    ),

    'dev' => array(
        'devMode' => true,
        'environmentVariables' => array(
            'env' => 'dev',
            'fileSystemPath' => '/vagrant/public/',
            'frontEndAssets' => '/src/',
            'siteName' => '<%= siteName %>',
        )
    ),

    // Treat *.vagrantshare.com the same as localhost
    'vagrantshare' => array(
        'devMode' => true,
        'environmentVariables' => array(
            'env' => 'dev',
            'fileSystemPath' => '/vagrant/public/',
            'frontEndAssets' => '/src/',
            'siteName' => '<%= siteName %>',
        )
    ),
    '.com' => array(
        'cooldownDuration' => 0,

        'environmentVariables' => array(
            'env' => 'prod',
            'fileSystemPath' => '/opt/www/public',
            'frontEndAssets' => '/dist/',
            'siteName' => '<%= siteName %>',
        )
    )
);
