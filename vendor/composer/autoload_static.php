<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4eee6486fb4d2c0722c08d0847d2132a
{
    public static $files = array (
        '20716b7470cda7cd561f4000f723e024' => __DIR__ . '/..' . '/maithemewp/mai-installer/mai-installer.php',
    );

    public static $classMap = array (
        'PAnD' => __DIR__ . '/..' . '/collizo4sky/persist-admin-notices-dismissal/persist-admin-notices-dismissal.php',
        'WPDI_Plugin_Installer_Skin' => __DIR__ . '/..' . '/afragen/wp-dependency-installer/wp-dependency-installer.php',
        'WP_Dependency_Installer' => __DIR__ . '/..' . '/afragen/wp-dependency-installer/wp-dependency-installer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit4eee6486fb4d2c0722c08d0847d2132a::$classMap;

        }, null, ClassLoader::class);
    }
}
