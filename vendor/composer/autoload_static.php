<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc99d8261f949f1b47715a3d7815888a7
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GraphQL\\' => 8,
        ),
        'A' => 
        array (
            'App\\GraphQL\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GraphQL\\' => 
        array (
            0 => __DIR__ . '/..' . '/webonyx/graphql-php/src',
        ),
        'App\\GraphQL\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc99d8261f949f1b47715a3d7815888a7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc99d8261f949f1b47715a3d7815888a7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}