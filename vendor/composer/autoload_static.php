<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdaef0e336322eeb2833cb0a06a2d0ddb
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phiki\\' => 6,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phiki\\' => 
        array (
            0 => __DIR__ . '/..' . '/phiki/phiki/src',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdaef0e336322eeb2833cb0a06a2d0ddb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdaef0e336322eeb2833cb0a06a2d0ddb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdaef0e336322eeb2833cb0a06a2d0ddb::$classMap;

        }, null, ClassLoader::class);
    }
}
