<?php
namespace App\Http\Middleware; use Closure; use Illuminate\Support\Facades\Auth; class RedirectIfAuthenticated { public function handle($spfb41ce, Closure $sp972a66, $sp07623a = null) { if (Auth::guard($sp07623a)->check()) { return redirect('/home'); } return $sp972a66($spfb41ce); } }