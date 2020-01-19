<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7f7012e4ef1a54e8efbed7b4f3bc0681
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
            0 => __DIR__ . '/..' . '/app/template/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7f7012e4ef1a54e8efbed7b4f3bc0681::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7f7012e4ef1a54e8efbed7b4f3bc0681::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7f7012e4ef1a54e8efbed7b4f3bc0681::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
