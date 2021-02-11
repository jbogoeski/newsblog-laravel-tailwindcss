<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function Mkd()
    {
        Session::get('lang');
        Session()->forget('lang');
        Session()->put('lang', 'mkd');

        return redirect()->back();
    }

    public function English()
    {
        Session::get('lang');
        Session()->forget('lang');
        Session()->put('lang', 'english');

        return redirect()->back();
    }
}
