<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Api' => $baseDir . '/plugins/Api/',
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'CMS' => $baseDir . '/plugins/CMS/',
        'Api' => $baseDir . '/plugins/Api/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/'
    ]
];