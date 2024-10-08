<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitad3df859cd272076b4e5002c5775e400
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

        spl_autoload_register(array('ComposerAutoloaderInitad3df859cd272076b4e5002c5775e400', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitad3df859cd272076b4e5002c5775e400', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitad3df859cd272076b4e5002c5775e400::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}