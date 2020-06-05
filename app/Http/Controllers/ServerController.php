<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\ServeInclude;
use App\Tour;

class ServerController extends Controller
{
    public function getIndex()
    {
        $server = ServeInclude::all();

        return view('admin.service.index',compact('server'));
    }
   
    public function getAdd()
    {
        $server = ServeInclude::all();
        $tour = Tour::all();

        return view('admin.service.add',compact('server','tour'));
    }

    public function postAdd(Request $request)
    {
        $this->validate($request,
        [
            'Name'=>'required|unique:place,name|min:1|max:100',
            'Tour'=>'required',
            'Img'=>'required',
            'Price'=>'required|integer',
            'Number'=>'required',
            'Tour'=>'required',
            'Img'=>'required',
        ],
        [
            'Name.required'=>'Bạn chưa nhập tên dịch vụ',
            'Tour.required'=>'Bạn chưa chọn địa điểm du lịch',
            // 'Tour.unique'=>'Địa điểm tồn tại',
            'Name.required'=>'Tên địa điểm du lịch đã tồn tại',
            'Img.required'=>'Bạn chưa nhập hình ảnh',
            'Img.required'=>'Tên hình ảnh đã tồn tại',
            'Price.required'=>'Bạn chưa nhập giá',
            // 'Price.'=>'Bạn nhập không hợp lệ',
            'Number.required'=>'Bạn chưa nhập số lượng',
            'Tour.required'=>'Bạn chưa chọn mã tour',
            'Tour.required'=>'Bạn chưa chọn hình ảnh'

        ]);
        $server = new ServeInclude;
        $server->name = $request->Name;
        $server->price = $request->Price;
        $server->number = $request->Number;
        $server->id_tour = $request->Tour;
        $server->img = $request->Img;
        $server->save();
        
        return redirect('admin/service/add')->with('notification','Thêm thành công');
    }
    public function getEdit($id)
    {
        $server = ServeInclude::find($id);
        $tour = Tour::all();
        return view('admin.service.edit',compact('server','tour'));
    }

    public function postEdit(Request $request,$id)
    {
        $this->validate($request,
        [
            'Name'=>'required|unique:place,name|min:1|max:100',
            'Tour'=>'required',
            'Img'=>'required',
            'Price'=>'required|integer',
            'Number'=>'required',
            'Tour'=>'required',
            'Img'=>'required',
        ],
        [
            'Name.required'=>'Bạn chưa nhập tên dịch vụ',
            'Tour.required'=>'Bạn chưa chọn địa điểm du lịch',
            // 'Tour.unique'=>'Địa điểm tồn tại',
            'Name.required'=>'Tên địa điểm du lịch đã tồn tại',
            'Img.required'=>'Bạn chưa nhập hình ảnh',
            'Img.required'=>'Tên hình ảnh đã tồn tại',
            'Price.required'=>'Bạn chưa nhập giá',
            // 'Price.'=>'Bạn nhập không hợp lệ',
            'Number.required'=>'Bạn chưa nhập số lượng',
            'Tour.required'=>'Bạn chưa chọn mã tour',
            'Tour.required'=>'Bạn chưa chọn hình ảnh'

        ]);
        $server = ServeInclude::find($id);
        $server->name = $request->Name;
        $server->price = $request->Price;
        $server->number = $request->Number;
        $server->id_tour = $request->Tour;
        $server->img = $request->Img;
        $server->save();
        
        return redirect('admin/service/edit/'.$id)->with('notification','Sửa thành công');
        }
    public function getDelete($id)
    {
        $server = ServeInclude::find($id);
        $server->delete();
        
        return redirect('admin/service/index')->with('notification','Xóa thành công');
    }
  
   
}
