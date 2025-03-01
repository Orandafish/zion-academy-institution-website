<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf74f963c66f50439c5a3e84e79a0c555
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf74f963c66f50439c5a3e84e79a0c555::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf74f963c66f50439c5a3e84e79a0c555::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf74f963c66f50439c5a3e84e79a0c555::$classMap;

        }, null, ClassLoader::class);
    }
}
