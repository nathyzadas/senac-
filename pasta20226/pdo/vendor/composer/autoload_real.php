<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit8811d818b3e2cb1dd47d30eaea64f84e
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

        spl_autoload_register(array('ComposerAutoloaderInit8811d818b3e2cb1dd47d30eaea64f84e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit8811d818b3e2cb1dd47d30eaea64f84e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit8811d818b3e2cb1dd47d30eaea64f84e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}