<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf5a9ab24fdae11b5a60786f1bb63aa0e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf5a9ab24fdae11b5a60786f1bb63aa0e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf5a9ab24fdae11b5a60786f1bb63aa0e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf5a9ab24fdae11b5a60786f1bb63aa0e::$classMap;

        }, null, ClassLoader::class);
    }
}
