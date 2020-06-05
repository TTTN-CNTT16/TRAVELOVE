<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;
use App\Handbook;
use App\Comment;
use App\Promotion;

class PagesController extends Controller
{    
    function home()
    {
        // die('ok');
        $slide = Slide::all();
        // view()->share('slide', $slide);
        return view('pages.home', ['slide'=>$slide]);
    }

    function handbooks()
    {
        $handbooks = Handbook::all();
        $handbooks = Handbook::orderByDesc('created_at')->paginate(4);
        return view('pages.handbooks', ['handbooks'=>$handbooks]);
    }

    function detailHandbook( Request $request)
    {
        $handbook = Handbook::where('id', $request->id)->first();
        return view('pages.detailHandbook', compact('handbook'));
    }

    function promotions()
    {
        $promotions = Promotion::all();
        $promotions = Promotion::orderByDesc('created_at')->paginate(4);
        return view('pages.promotions', ['promotions'=>$promotions]);
    }
}
