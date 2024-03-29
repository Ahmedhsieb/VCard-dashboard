<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit00abe7ad66052659d63e1a5fb62a21b6
{
    public static $files = array (
        '9da686e01ca095a1f6b72777a804b6e2' => __DIR__ . '/../..' . '/src/core/support/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Ahmed\\Vcard\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ahmed\\Vcard\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit00abe7ad66052659d63e1a5fb62a21b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit00abe7ad66052659d63e1a5fb62a21b6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit00abe7ad66052659d63e1a5fb62a21b6::$classMap;

        }, null, ClassLoader::class);
    }
}
