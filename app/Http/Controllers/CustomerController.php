<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Customer;
use App\ListCustomer;

class CustomerController extends Controller
{
    public function getIndex()
    {
        $customer = Customer::all();
        return view('admin.customer.index',compact('customer'));
    }
    public function getAdd()
    {
        $customer = Customer::all();
        return view('admin.customer.add');
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',

        ]
        ,[
            'name.required'=>'Bạn chưa nhập tên hành khách',
            'email.required'=>'Bạn chưa nhập email',
            'phone.required'=>'Bạn chưa nhập số điện thoại',
            'address.required'=>'Bạn chưa nhập địa chỉ',
        ]);
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->note=$request->note;
        $customer->save();

        return redirect('admin/customer/add')->with('notification','Thêm thành công');
    }
    public function getEdit($id)
    {
        $customer = Customer::find($id);
        return view('admin.customer.edit',compact('customer'));
    }
    public function postEdit($id,Request $request)
    {
        $customer = Customer::find($id);

        // $this->validate($request,
    // [
    //     // co the xoa cai unique:,column,except,id
    //     'name'=>'required',
    //     'email'=>'required',
    //     'phone'=>'required',
    //     'address'=>'required',
    // ],
    // [
    //     'name.required'=>'Bạn chưa nhập tên khách hàng',
    //     'email.required'=>'Bạn chưa nhập email',
    //     'phone.required'=>'Bạn chưa nhập số điện thoại',
    //     'address.required'=>'Bạn chưa nhập địa chỉ',
    // ]);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->note = $request->note;
        $customer->save();

        return redirect('admin/customer/edit/'.$id)->with('notification','Sửa thành công');
    }
    
    public function getDelete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return redirect('admin/customer/index')->with('notification','Xóa thành công');
    }

    public function getListCustomer()
    {
        $listcustomers = ListCustomer::all();
        return view('admin.customer.indexPassen',compact('listcustomers'));
    }
}
