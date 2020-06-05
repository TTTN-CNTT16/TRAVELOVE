<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
// use Illuminate\Http\Request;

class BillDetailController extends Controller
{
    //
    public function getIndex()
    {
        return view('admin.billdetail.index');
    }

    public function getDelete()
    {
        return view('admin.billdetail.delete');
    }
}
