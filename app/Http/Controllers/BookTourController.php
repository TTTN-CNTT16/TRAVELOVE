<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
// use Illuminate\Http\Request;

class BookTourController extends Controller
{
    //
    public function getIndex()
    {
        return view('admin.book_tour.index');
    }

    public function getDelete()
    {
        return view('admin.book_tour.delete');
    }
    public function getStatus()
    {
        return view('admin.book_tour.status');
    }
}
