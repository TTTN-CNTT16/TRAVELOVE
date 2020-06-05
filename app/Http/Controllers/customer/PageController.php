<?php
namespace App\Http\Controllers;
namespace App\Http\Controllers\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Crypt;
use App\Tour;
use App\Place;
class PageController extends Controller
{
    
    public function getSearch(Request $request)
    {
        $places = Place::Paginate(5);
        // $date->format('d-m-Y')
        // echo date("Y-m-d", strtotime($var) );
        $key = $request->key;
        $begin = date("Y-m-d",strtotime($request->beginDay));
        $end = date("Y-m-d",strtotime($request->endDay));
        $be = $request->beginDay;
            $listTours = Tour::select(DB::raw("DATEDIFF(endDay,beginDay) as days"),
            "id",'name','number','id_place','contents','beginDay','endDay','img')
            ->where('name','like','%'.$key.'%')
            ->where('beginDay',$begin)
            ->orwhere('endDay',$end)
            ->get();
            return view('pages.Tour.search',compact('listTours'));
        
        

        
    }
}
