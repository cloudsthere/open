<?php

namespace App\Http\Controllers\Recharge;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function getIndex(Request $request, $subapp)
    {
        // echo get_class(view());
        // dump($request);
        // dump($subapp);
        return view('index.index');
    }
}
