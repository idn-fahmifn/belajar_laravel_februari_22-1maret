<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $umur = $request->session()->get('age');

        if ($umur > 18) {
            // izinkan masuk ke halaman success
            return $next($request);

        }

        return redirect()->route('form.umur')->with('fail','Umur kamu belum cukup');

    }
}
