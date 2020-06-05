<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Cost;
use App\Tour;
class CostController extends Controller
{
    public function getIndex()
    {
        $cost = Cost::paginate(10);

        return view('admin.cost.index',compact('cost'));
    }

    public function getAdd()
    {
        // $costs = Cost::all();
        $tour = Tour::all();
        
        return view('admin.cost.add',compact('tour'));
    }

    public function postAdd(Request $request)
    {
        $this->validate($request,
        [
            'Price'=>'required|integer',
            'Tour'=>'required',
            'Day'=>'required',

        ]
        ,[
            'Price.required'=>'Bạn nhập chi phí',
            'Tour.required'=>'Bạn chưa chọn mã tour',
            'Day.required'=>'Bạn nhập ngày hiệu lực',
        ]);
        $cost = new Cost;
        $cost->price = $request->Price;
        $cost->id_tour = $request->Tour;
        $cost->effectDay = $request->Day;
        $cost->save();

        return redirect('admin/cost/add')->with('notification','Thêm thành công');
    }
    public function getEdit($id)
    {
        $cost = Cost::find($id);
        $tour = Tour::all();

        return view('admin.cost.edit',compact('cost','tour'));
    }

    public function postEdit(Request $request,$id)
    {
        $cost = Cost::find($id);
        $this->validate($request,
        [
            'Price'=>'required|integer',
            'Tour'=>'required',
            'Day'=>'required',

        ]
        ,[
            'Price.required'=>'Bạn nhập chi phí',
            'Tour.required'=>'Bạn chưa chọn mã tour',
            'Day.required'=>'Bạn nhập ngày hiệu lực',
        ]);
        $cost->price = $request->Price;
        $cost->id_tour = $request->Tour;
        $cost->effectDay = $request->Day;
        $cost->save();

        return redirect('admin/cost/edit/'.$id)->with('notification','Sửa thành công');
    }
    public function getDelete($id)
    {
        $cost = Cost::find($id);
        $cost->delete();

        return redirect('admin/cost/index')->with('notification','Xóa thành công');
    }
}
