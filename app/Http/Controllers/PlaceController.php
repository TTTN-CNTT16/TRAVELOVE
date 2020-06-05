<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Place;
use App\Region;
class PlaceController extends Controller
{
    //
    public function getIndex()
    {
        $place = Place::all();

        return view('admin.place.index',compact('place'));
    }
    public function getAdd()
    {
        $region = Region::all();

        return view('admin.place.add',compact('region'));
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,
        [
            'Name'=>'required|unique:place,name|min:1|max:100',
            'region'=>'required',
            'img'=>'required',
        ],
        [
            'Name.required'=>'Bạn chưa nhập tên địa điểm du lịch',
            'region.required'=>'Bạn chưa chọn địa điểm du lịch',
            'region.unique'=>'Địa điểm tồn tại',
            'Name.required'=>'Tên địa điểm du lịch đã tồn tại',
            'img.required'=>'Bạn chưa nhập hình ảnh',
            'img.required'=>'Tên hình ảnh đã tồn tại',
        ]);
        $place = new Place;
        $place->name = $request->Name;
        $place->id_region = $request->region;
        $place->img = $request->img;
        $place->save();
        
        return redirect('admin/place/add')->with('notification','Thêm thành công');
    }
    public function getEdit($id)
    {
        $place = Place::find($id);
        $region = Region::all();
        
        return view('admin.place.edit',compact('place','region'));
    }
    public function postEdit(Request $request,$id)
    {
        $place = Place::find($id);
        $this->validate($request,
        [
            // co the xoa cai unique:,column,except,id
            'NAME'=>'required|unique:place,name|min:1|max:100',
            'IMG'=>'required',
        ],
        [
            'NAME.required'=>'Bạn chưa nhập tên địa điểm du lịch',
            'NAME.required'=>'Tên địa điểm du lịch đã tồn tại',
            'IMG.required'=>'Bạn chưa nhập hình ảnh',
            // 'img.required'=>'Tên hình ảnh đã tồn tại',
        ]);
        $place->name = $request->NAME;
        $place->img = $request->IMG;
        $place->save();
        return redirect('admin/place/edit/'.$id)->with('notification','Sửa thành công');
    }

    public function getDelete($id)
    {
      
        $place = Place::find($id);
        $place->delete();
        // var_dump($place);
        // $delete =  DB::place('SET FOREIGN_KEY_CHECKS=0;');

        return redirect('admin/place/index')->with('notification','Xóa thành công');
    }
    
}
