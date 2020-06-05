<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
// use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function getIndex()
    {
        return view('admin.customer.index');
    }
    public function getAdd()
    {
        return view('admin.customer.add');
    }
    public function getDelete()
    {
        return view('admin.customer.delete');
    }
    public function getHistory()
    {
        return view('admin.customer.history');
    }
    public function getUpdate()
    {
        return view('admin.customer.update');
    }
    public function getComment()
    {
        return view('admin.customer.comment');
    }
}
