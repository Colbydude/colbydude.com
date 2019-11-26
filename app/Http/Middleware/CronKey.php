<?php

namespace App\Http\Middleware;

use Closure;

class CronKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! $request->has('cron_key') || $request->input('cron_key') != config('services.cron.key')) {
            return response()->json(['message' => 'Invalid cron key.'], 401);
        }

        return $next($request);
    }
}
