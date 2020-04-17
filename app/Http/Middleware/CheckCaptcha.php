<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Validator;
class CheckCaptcha
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
        $validator = Validator::make($request->all(),[
            'captcha' => ' required|captcha ',
        ],[
            'captcha.required'=>'请输入验证码',
            'captcha.captcha'=>'验证码错误',
        ]);
        
        if($validator->fails()){
            return response()->json([
                'error'=>$validator->errors()->first('captcha')
            ]);

        }

        return $next($request);
    }
}
