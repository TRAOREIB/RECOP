<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Captcha;
use Illuminate\Http\Request;

class CaptchaController extends Controller
{
    //
    public function refreshCaptcha(){
        return response()->json([
            'captcha' => Captcha::img()
        ]);
    }
}
