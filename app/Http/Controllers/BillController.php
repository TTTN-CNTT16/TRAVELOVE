<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Bill;
use App\BillDetail;
class BillController extends Controller
{
    // $showtours = Cost::find($id);
    // $showtours->tours()->where('id', $id)->get();

    public function getIndex()
    {
        $bills = Bill::all();
       
        return view('admin.bill.index',compact('bills'));
    }
    public function getIndexDetail()
    {
        $billdetail = BillDetail::all();

        return view('admin.bill.indexDetail',compact('billdetail'));
    }
    // public function getEdit($id)
    // {
    //     $bills = Bill::find($id);

    //     return view('admin.bill.edit');
    // }
    // public function postEdit($id,Request $request)
    // {
    //     $bills = Bill::find($id);

    //     $bills->
    //     return redirect('admin/bill/edit/'.$id)->with('notification','Sửa thành công');
    // }

    public function getDelete($id)
    {
        $bills = Bill::find($id);
        $bills->delete();

        return redirect('admin/bill/index')->with('notification','Xóa thành công');
    }
    public function getDeleteDetail($id)
    {
        $bills = BillDetail::find($id);
        $bills->delete();

        return redirect('admin/bill/index')->with('notification','Xóa thành công');
    }
    
}
