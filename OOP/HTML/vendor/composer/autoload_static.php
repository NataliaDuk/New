<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita12c58ace7306457bb24b5793ad0f48e
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'W1020\\ORM8\\' => 11,
            'W1020\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'W1020\\ORM8\\' =>
        array (
            0 => __DIR__ . '/..' . '/w1020/html/src',
        ),
        'W1020\\' => 
        array (
            0 => __DIR__ . '/..' . '/w1020/orm/W1020',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita12c58ace7306457bb24b5793ad0f48e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita12c58ace7306457bb24b5793ad0f48e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita12c58ace7306457bb24b5793ad0f48e::$classMap;

        }, null, ClassLoader::class);
    }
}
