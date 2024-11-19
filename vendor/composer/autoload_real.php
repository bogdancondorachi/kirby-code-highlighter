<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdaef0e336322eeb2833cb0a06a2d0ddb
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitdaef0e336322eeb2833cb0a06a2d0ddb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdaef0e336322eeb2833cb0a06a2d0ddb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdaef0e336322eeb2833cb0a06a2d0ddb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
