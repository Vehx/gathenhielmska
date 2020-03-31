<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a689cc9c53a76d252153ff5014d7ff0
{
    public static $files = array (
        'a2c48002d05f7782d8b603bd2bcb5252' => __DIR__ . '/..' . '/johnbillion/extended-cpts/extended-cpts.php',
        '413614dbc06bade22a685c0ebe14027c' => __DIR__ . '/..' . '/wordplate/acf/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WordPlate\\Acf\\' => 14,
        ),
        'E' => 
        array (
            'ExtCPTs\\Tests\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WordPlate\\Acf\\' => 
        array (
            0 => __DIR__ . '/..' . '/wordplate/acf/src',
        ),
        'ExtCPTs\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/johnbillion/extended-cpts/tests/phpunit',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a689cc9c53a76d252153ff5014d7ff0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a689cc9c53a76d252153ff5014d7ff0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
