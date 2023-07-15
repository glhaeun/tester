<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56ec48ec88c994745575da25d21bd9db
{
    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Upload' => 
            array (
                0 => __DIR__ . '/..' . '/codeguy/upload/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit56ec48ec88c994745575da25d21bd9db::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit56ec48ec88c994745575da25d21bd9db::$classMap;

        }, null, ClassLoader::class);
    }
}