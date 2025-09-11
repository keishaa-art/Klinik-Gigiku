<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            \Illuminate\Routing\Middleware\ThrottleRequests::class.':api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * @var array<string, class-string|string>
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,

        // Tambahin punyamu di sini
        'admin'   => \App\Http\Middleware\AdminMiddleware::class,
        'dokter'  => \App\Http\Middleware\DokterMiddleware::class,
        'farmasi' => \App\Http\Middleware\FarmasiMiddleware::class,
        'pasien'  => \App\Http\Middleware\PasienMiddleware::class,

        // Kalau mau fleksibel pake "role"
        'role'    => \App\Http\Middleware\RoleMiddleware::class,

        'auth' => \App\Http\Middleware\Authenticate::class,
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
        'dokter' => \App\Http\Middleware\DokterMiddleware::class,
        'farmasi' => \App\Http\Middleware\FarmasiMiddleware::class,
        'pasien' => \App\Http\Middleware\PasienMiddleware::class,
    ];
}
