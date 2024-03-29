<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb8f6eb9e59507edd9b2f2210ec914fe
{
    public static $files = array (
        '3a37ebac017bc098e9a86b35401e7a68' => __DIR__ . '/..' . '/mongodb/mongodb/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MongoDB\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MongoDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongodb/mongodb/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb8f6eb9e59507edd9b2f2210ec914fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb8f6eb9e59507edd9b2f2210ec914fe::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
