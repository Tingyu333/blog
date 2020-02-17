<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Article;

class AuthorityManagement
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
        $articalId = $request->route('id');
        $name = Article::where('id', $articalId)->value('name');

        //dd(Auth::user()->name);
        
        if ($name == Auth::user()->name) { 
            return $next($request);
        } elseif (Auth::user()->identity == 'admin') {
            return $next($request);
        } elseif ($articalId == NULL) {
            return $next($request);
        }
       
       return back()->with([
                'flash_message' => '你不是該文章的作者!'
            ]);
        
    }
}
