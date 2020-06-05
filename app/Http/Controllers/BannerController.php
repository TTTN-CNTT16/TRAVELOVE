<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    public function getIndex()
    {
        return view('admin.banner.index');
    }
}
