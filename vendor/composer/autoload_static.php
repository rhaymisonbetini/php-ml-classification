<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc17689bcfc1df4c8e85d1abb55457e5d
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Phpml' => 
            array (
                0 => __DIR__ . '/..' . '/php-ai/php-ml/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitc17689bcfc1df4c8e85d1abb55457e5d::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc17689bcfc1df4c8e85d1abb55457e5d::$classMap;

        }, null, ClassLoader::class);
    }
}
