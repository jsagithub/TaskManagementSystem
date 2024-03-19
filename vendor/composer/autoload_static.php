<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a8f4629c7cf8d0bb44b419862bdc3e8
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a8f4629c7cf8d0bb44b419862bdc3e8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a8f4629c7cf8d0bb44b419862bdc3e8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}