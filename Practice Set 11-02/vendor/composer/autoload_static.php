<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit95c50c490949645687b049e000241e6e
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit95c50c490949645687b049e000241e6e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit95c50c490949645687b049e000241e6e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit95c50c490949645687b049e000241e6e::$classMap;

        }, null, ClassLoader::class);
    }
}
