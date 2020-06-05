<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
class LayoutController extends Controller
{
    public function getIndex()
    {
        return view('admin.layout.index');
    }
}
