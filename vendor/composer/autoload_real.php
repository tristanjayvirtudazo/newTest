<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit5387cb4914d0ab0f8a4988e71ea31271
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

        spl_autoload_register(array('ComposerAutoloaderInit5387cb4914d0ab0f8a4988e71ea31271', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit5387cb4914d0ab0f8a4988e71ea31271', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit5387cb4914d0ab0f8a4988e71ea31271::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
