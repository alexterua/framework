<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit45a992b2df9812509080e2cf5d12215f
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Framework\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Framework',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit45a992b2df9812509080e2cf5d12215f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit45a992b2df9812509080e2cf5d12215f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
