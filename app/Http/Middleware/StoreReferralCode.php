<?php

namespace App\Http\Middleware;

use App\Models\ReferralLink;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StoreReferralCode
{
    /**
     * Handle an incoming request.
     *
     * @param $request
     * @param Closure(Request): (Response) $next
     * @return mixed|Response
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($request->has('ref')){
            $referral = ReferralLink::whereCode($request->get('ref'))->first();
            $response->cookie('ref', $referral->id, $referral->lifetime_minutes);
        }

        return $response;
    }
}
