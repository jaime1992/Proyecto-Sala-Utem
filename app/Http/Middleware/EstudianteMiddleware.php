<?php namespace App\Http\Middleware;

use Closure;
use Auth;

class EstudianteMiddleware {

public function handle($request, Closure $next)
  {
    $user=Auth::user();
    if(is_null($user->roles()->whereNombre('Estudiante')->first()))
      return redirect()->route('auth.login');

    return $next($request);
  }
}

