<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Tour;
use App\Place;
use App\Cost;
use App\SlideTour;

class TourController extends Controller
{
    
    public function getIndex()
    {
        $tour = Tour::paginate(10);
        
        return view('admin.tour.index',compact('tour'));
    }

    public function getAdd()
    {
        $place = Place::all();
        return view('admin.tour.add',compact('place'));
    }
    public function postAdd(Request $request)
    {
        // $this->validate($request,
        // [
        //     'name'=>'required',
        //     'img'=>'required',
        //     'beginDay'=>'required',
        //     'endDay'=>'required',

        // ]
        // ,[
        //     'name.required'=>'Bạn chưa nhập tên địa điểm du lịch',
        //     'img.required'=>'Bạn chưa chọn hình anh',
        //     'beginDay.required'=>'Bạn chưa chọn ngày khởi hành',
        //     'endDay.required'=>'Bạn chưa chọn ngày kết thúc',
        // ]);
        $tour = new Tour;
        $tour->name = $request->name;
        $tour->id_place = $request->place;
        $tour->number = $request->Number;
        $tour->contents = $request->contents;
        $tour->img = $request->img;
        $tour->beginDay = $request->beginDay;
        $tour->endDay  = $request->endDay;
        $tour->status = $request->status;
        $tour->save();

        return redirect('admin/tour/add')->with('notification','Thêm thành công');
    }
    public function getEdit($id)
    {
        $tour = Tour::find($id);
        $place = Place::all();
        return view('admin.tour.edit',compact('tour','place'));
    }
   public function postEdit(Request $request,$id)
   {
    $tour = Tour::find($id);
    
    // $this->validate($request,
    // [
    //     // co the xoa cai unique:,column,except,id
    //     'NAME'=>'required|unique:place,name|min:1|max:100',
    //     'IMG'=>'required',
        
    // ],
    // [
    //     'NAME.required'=>'Bạn chưa nhập tên địa điểm du lịch',
    //     'NAME.required'=>'Tên địa điểm du lịch đã tồn tại',
    //     'IMG.required'=>'Bạn chưa nhập hình ảnh',
    //     // 'img.required'=>'Tên hình ảnh đã tồn tại',
    // ]);
    $tour->name = $request->NAME;
    $tour->contents = $request->CONTENTS;
    $tour->beginDay = $request->BEGINDAY;
    $tour->endDay = $request->ENDDAY;
    $tour->img = $request->IMG;
    $tour->save();
    // $tour->status = $request->status;
    return redirect('admin/tour/edit/'.$id)->with('notification','Sửa thành công');

   }
    public function getDelete($id)
    {
        $tour = Tour::find($id);
        $tour->delete();

        return redirect('admin/tour/index')->with('notification','Xóa thành công');
    }
 
    //add slide tour 
    public function getAddSlide()
    {
        $slideTour = SlideTour::all();
        return view('admin.tour.addSlide',compact('slideTour'));
    }
    public function postAddSlide(Request $request)
    {
        $slideTour = new SlideTour;
        $slideTour->id_tour = $request->tour;
        $slideTour->img = $request->img;
        $slideTour->save();

        return redirect('admin/tour/addSlide')->with('notification','Thêm thành công');
    }
   
}
