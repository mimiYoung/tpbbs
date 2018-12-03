<?php

return [
    // 模板引擎类型 支持 php think 支持扩展
    'type' => 'Blade',
    // 视图基础目录（集中式）
    'view_base' => Env::get('ROOT_PATH') . 'resources' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR,
    // 模版其实路径
    'view_path' => Env::get('ROOT_PATH') . 'resources' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR,
    // 模版文件名分隔符
    'view_depr' => DIRECTORY_SEPARATOR,
    // 模板文件后缀
    'view_suffix' => 'blade.php',

    'cache' => [
        'cache_subdir' => 'blade.php',
        'prefix' => '',
    ],

    'tpl_replace_string' => [],
];
