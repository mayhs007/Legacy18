<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsOrganizing
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
            $event_id = $request->route('event_id');
            return $next($request);
            if(Auth::user()->organizings()->find($event_id) || Auth::user()->hasRole('root')|| Auth::user()->hasRole('registration'))
            {
               return $next($request);        
            }
           else{
            return redirect()->route('admin::root');
        }
    }
}
