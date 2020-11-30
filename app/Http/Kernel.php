<?php
namespace App\Http; use Illuminate\Foundation\Http\Kernel as HttpKernel; class Kernel extends HttpKernel { protected $middleware = array(\Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class, \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class, \App\Http\Middleware\TrimStrings::class, \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class, \App\Http\Middleware\TrustProxies::class, \App\Http\Middleware\CORS::class); protected $middlewareGroups = array('web' => array(\App\Http\Middleware\EncryptCookies::class, \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class, \Ken\BladeMinify\Middleware\Minify::class), 'api' => array(\App\Http\Middleware\EncryptCookies::class, \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class, \Illuminate\Session\Middleware\StartSession::class, \Illuminate\Session\Middleware\AuthenticateSession::class, \Illuminate\View\Middleware\ShareErrorsFromSession::class, 'throttle:120,1', \Illuminate\Routing\Middleware\SubstituteBindings::class)); protected $routeMiddleware = array('auth' => \Illuminate\Auth\Middleware\Authenticate::class, 'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class, 'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class, 'can' => \Illuminate\Auth\Middleware\Authorize::class, 'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class, 'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class); }