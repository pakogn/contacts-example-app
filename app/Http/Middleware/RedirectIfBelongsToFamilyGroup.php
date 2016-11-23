<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfBelongsToFamilyGroup
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
        $contact = $request->route('contact');

        if ($contact->group == 'familia') {
            return redirect()->route('contacts.index');
        }

        return $next($request);
    }
}
