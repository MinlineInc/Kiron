<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2982c97b1c1cd8be8e5ebc420637217f
{
    public static $files = array (
        '8b0065ca552ee19ed45f2ec1f07d436a' => __DIR__ . '/../..' . '/src/defines.php',
    );

    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kiron\\Session\\' => 14,
            'Kiron\\Router\\' => 13,
            'Kiron\\Mvc\\' => 10,
            'Kiron\\Language\\' => 15,
            'Kiron\\Http\\' => 11,
            'Kiron\\Html\\' => 11,
            'Kiron\\File\\' => 11,
            'Kiron\\Emitter\\' => 14,
            'Kiron\\Database\\' => 15,
            'Kiron\\Cookie\\' => 13,
            'Kiron\\Config\\' => 13,
            'Kiron\\Cache\\' => 12,
            'Kiron\\Bags\\' => 11,
            'Kiron\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kiron\\Session\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Session',
        ),
        'Kiron\\Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Router',
        ),
        'Kiron\\Mvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Mvc',
        ),
        'Kiron\\Language\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Language',
        ),
        'Kiron\\Http\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Http',
        ),
        'Kiron\\Html\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Html',
        ),
        'Kiron\\File\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/File',
        ),
        'Kiron\\Emitter\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Emitter',
        ),
        'Kiron\\Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Database',
        ),
        'Kiron\\Cookie\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Cookie',
        ),
        'Kiron\\Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Config',
        ),
        'Kiron\\Cache\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Cache',
        ),
        'Kiron\\Bags\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Bags',
        ),
        'Kiron\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2982c97b1c1cd8be8e5ebc420637217f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2982c97b1c1cd8be8e5ebc420637217f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
