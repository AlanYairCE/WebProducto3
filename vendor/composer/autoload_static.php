<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80040c0859b2836d34b9c8ab7a46e064
{
    public static $files = array (
        'c9d07b32a2e02bc0fc582d4f0c1b56cc' => __DIR__ . '/..' . '/laminas/laminas-servicemanager/src/autoload.php',
        'c2aad8997a98dfc4771bdbffea3d62b7' => __DIR__ . '/..' . '/laminas/laminas-code/polyfill/ReflectionEnumPolyfill.php',
        '7e9bd612cc444b3eed788ebbe46263a0' => __DIR__ . '/..' . '/laminas/laminas-zendframework-bridge/src/autoload.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'L' => 
        array (
            'Laminas\\ZendFrameworkBridge\\' => 28,
            'Laminas\\Validator\\' => 18,
            'Laminas\\Uri\\' => 12,
            'Laminas\\Stdlib\\' => 15,
            'Laminas\\Soap\\' => 13,
            'Laminas\\ServiceManager\\' => 23,
            'Laminas\\Server\\' => 15,
            'Laminas\\Escaper\\' => 16,
            'Laminas\\Db\\' => 11,
            'Laminas\\Code\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Laminas\\ZendFrameworkBridge\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-zendframework-bridge/src',
        ),
        'Laminas\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-validator/src',
        ),
        'Laminas\\Uri\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-uri/src',
        ),
        'Laminas\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-stdlib/src',
        ),
        'Laminas\\Soap\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-soap/src',
        ),
        'Laminas\\ServiceManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-servicemanager/src',
        ),
        'Laminas\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-server/src',
        ),
        'Laminas\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-escaper/src',
        ),
        'Laminas\\Db\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-db/src',
        ),
        'Laminas\\Code\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-code/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit80040c0859b2836d34b9c8ab7a46e064::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80040c0859b2836d34b9c8ab7a46e064::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit80040c0859b2836d34b9c8ab7a46e064::$classMap;

        }, null, ClassLoader::class);
    }
}
