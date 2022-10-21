<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c4d4c23000b2f1100bbaf25508f99be
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Template\\Classes\\' => 17,
        ),
        'O' => 
        array (
            'Observer\\Classes\\' => 17,
        ),
        'F' => 
        array (
            'Facade\\Classes\\' => 15,
            'FabricaSimple\\Classes\\' => 22,
        ),
        'D' => 
        array (
            'Decorator\\Classes\\' => 18,
        ),
        'B' => 
        array (
            'Builder\\Classes\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Template\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Template/Classes',
        ),
        'Observer\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Observer/Classes',
        ),
        'Facade\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Facade/Classes',
        ),
        'FabricaSimple\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/FabricaSimple/Classes',
        ),
        'Decorator\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Decorator/Classes',
        ),
        'Builder\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Builder/Classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8c4d4c23000b2f1100bbaf25508f99be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8c4d4c23000b2f1100bbaf25508f99be::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8c4d4c23000b2f1100bbaf25508f99be::$classMap;

        }, null, ClassLoader::class);
    }
}
