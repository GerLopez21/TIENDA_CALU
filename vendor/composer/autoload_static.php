<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ae5664dc2658cb5772dd9c07bb2eca5
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Cache\\' => 10,
        ),
        'M' => 
        array (
            'MercadoPago\\' => 12,
        ),
        'D' => 
        array (
            'Doctrine\\Persistence\\' => 21,
            'Doctrine\\Common\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'MercadoPago\\' => 
        array (
            0 => __DIR__ . '/..' . '/mercadopago/dx-php/src/MercadoPago',
        ),
        'Doctrine\\Persistence\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/persistence/src/Persistence',
        ),
        'Doctrine\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/event-manager/src',
            1 => __DIR__ . '/..' . '/doctrine/common/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ae5664dc2658cb5772dd9c07bb2eca5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ae5664dc2658cb5772dd9c07bb2eca5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9ae5664dc2658cb5772dd9c07bb2eca5::$classMap;

        }, null, ClassLoader::class);
    }
}
