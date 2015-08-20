<?php

namespace Jtaurus\BlockSeoBots\Middleware;

use Closure;

class BlockSeoBotsMiddleware
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
        $instance = \App::make('BlockSeoBots');
        if($instance->check_if_user_agent_is_forbidden()){
            \App::abort(403, 'Access denied');
        }
        else{
            return $next($request);
        }
    }
}
