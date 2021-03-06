<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit289929532b96172ade618ff15f0fd987
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ilya_pavlovskyi\\math\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ilya_pavlovskyi\\math\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit289929532b96172ade618ff15f0fd987::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit289929532b96172ade618ff15f0fd987::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit289929532b96172ade618ff15f0fd987::$classMap;

        }, null, ClassLoader::class);
    }
}
