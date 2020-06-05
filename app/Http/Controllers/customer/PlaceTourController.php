<?php
namespace App\Http\Controllers\customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use \Crypt;
use App\Place;
use App\Tour;
use App\Cost;
use App\SlideTour;
class PlaceTourController extends Controller
{
    public function index()
    {
        
        //simplePaginate(5) link 
    //   $places = DB::table('places')->Paginate(5);
      $places = Place::Paginate(5);
      return view('pages.Tour.placeTour',compact("places"));
    }

    public function list_tour($id)
    {

       
        // use model
        // $id = (int) Crypt::decrypt($id);
        // var_dump($id);
        $showtours = Cost::find($id);
        $placeTours = Place::where('id',$id)->get();
        $listTours = Tour::select(DB::raw("DATEDIFF(endDay,beginDay) as days"),
        "id",'name','number','id_place','contents','beginDay','endDay','img')
        ->where('id_place',$id)->get();
       
        return view('pages.Tour.listTour',compact('placeTours','listTours'));
    }

    public function show($id)
    {

        // $id = (int)Crypt::decrypt($id);
        // var_dump($id);

        $showtours = Cost::find($id);
        $showtours->tours()->where('id', $id)->get();

        $timetours = Tour::select(DB::raw("DATEDIFF(endDay,beginDay) as days"))
        ->where('id',$showtours->tours->id)->get();

        $placetours = Place::find($showtours->tours->id_place);

        $slidetours = SlideTour::where('id_tour',$showtours->tours->id)->get();
        
        return view('pages.Tour.showTour',compact('showtours','placetours','timetours','slidetours'));
    }
}
