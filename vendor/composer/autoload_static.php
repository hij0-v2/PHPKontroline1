<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit51b37aceb07a2c0f7b33290b148ccde7
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'StudentsApp\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'StudentsApp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit51b37aceb07a2c0f7b33290b148ccde7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit51b37aceb07a2c0f7b33290b148ccde7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit51b37aceb07a2c0f7b33290b148ccde7::$classMap;

        }, null, ClassLoader::class);
    }
}
