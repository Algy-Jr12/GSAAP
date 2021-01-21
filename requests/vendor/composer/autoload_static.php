<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c2f3b85feb43f9e97dd01b02c872cc1
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1c2f3b85feb43f9e97dd01b02c872cc1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1c2f3b85feb43f9e97dd01b02c872cc1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1c2f3b85feb43f9e97dd01b02c872cc1::$classMap;

        }, null, ClassLoader::class);
    }
}