<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05a711a62408f545b3d755b36ef14174
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Yasha\\Wallet\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Yasha\\Wallet\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit05a711a62408f545b3d755b36ef14174::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05a711a62408f545b3d755b36ef14174::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit05a711a62408f545b3d755b36ef14174::$classMap;

        }, null, ClassLoader::class);
    }
}