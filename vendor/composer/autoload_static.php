<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1837a67d1c61cbad11ebd30e0c62d819
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1837a67d1c61cbad11ebd30e0c62d819::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1837a67d1c61cbad11ebd30e0c62d819::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1837a67d1c61cbad11ebd30e0c62d819::$classMap;

        }, null, ClassLoader::class);
    }
}
