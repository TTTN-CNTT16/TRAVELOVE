<?php
namespace App\Http\Controllers;
namespace App\Http\Controllers\customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Crypt;
use App\Place;
use App\Tour;
use App\Cost;
use App\SlideTour;
use App\serveInclude;
use App\Customer;
use App\ListCustomer;
use App\Bill;
use App\BillDeTail;
use Session;
class BookTourController extends Controller
{
    public $totalPrice = 0;
    public function show($id,Request $requset)
    {
        // $id = (int) Crypt::decrypt($id);

        $showtours = Cost::find($id);
        $showtours->tours()->where('id', $id)->get();
        $timetours = Tour::select(DB::raw("DATEDIFF(endDay,beginDay) as days"))
        ->where('id',$showtours->tours->id)->get();

        // $adult = $requset->input('adult');

        // $serves = serveInclude::where('id_tour',$showtours->tours->id)->get();
        $serves = serveInclude::all();


        return view('pages.Tour.bookTour',compact('showtours','timetours','serves'));
    }
    public function bookTour($id,Request $requset)
    {

        $id = (int) Crypt::decrypt($id);
        // var_dump($id);

        $showtours = Cost::find($id);
        $showtours->tours()->where('id', $id)->get();
        $timetours = Tour::select(DB::raw("DATEDIFF(endDay,beginDay) as days"))
        ->where('id',$showtours->tours->id)->get();

        $serves = serveInclude::where('id',$showtours->tours->id)->get();

        
        return view('pages.Tour.inforCustomer',compact('showtours','timetours','serves'));
    }
    // public function payMent($id)
    // {
    //     $showtours = Cost::find($id);
    //     $showtours->tours()->where('id', $id)->get();
    //     $timetours = Tour::select(DB::raw("DATEDIFF(endDay,beginDay) as days"))
    //     ->where('id',$showtours->tours->id)->get();
    //     $serves = serveInclude::where('id',$showtours->tours->id)->get();
    //     return view('pages.Tour.payment',compact('showtours','timetours','serves'));
        
    // }
    public function postCheckOut(Request $req,$id)
    {
        $id=  (int) Crypt::decrypt($id);
        // var_dump($id);
        $showtours = Cost::find($id);
        $showtours->tours()->where('id', $id)->get();

        $data = $req->input('totalPrice');
        $req->session()->put('total',$data);
        

        $customerContact = new Customer;

        $customerContact->name = $req->contactname;
        $customerContact->email = $req->email;
        $customerContact->phone = $req->mobilePhone;
        $customerContact->address = $req->address;
        $customerContact->note=$req->note1;
        $customerContact->save();

        $bill = new Bill;

        $bill->id_customer = $customerContact->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = ($req->totalPrice);
        // $bill->total = ($req->$_GET['totalPrice']);
        $bill->payment  = $req->payment;
        $bill->note = $req->note;
        $bill->save();

        $bill_detail = new BillDeTail;

        $bill_detail->id_bill = $bill->id;
        $bill_detail->id_tour = $showtours->tours->id;
        $bill_detail->quantity=$req->quantity;
        $bill_detail->save();

        // update so cho con nhan
        $numPassenger = $req->number;//so hanh khach di tour
        $number = $showtours->tours->number - $numPassenger;
        if($number>=0)
        {
            $tour = Tour::find($showtours->tours->id);
            $tour->number = $number;
            $tour->save();
        }else{
            echo "<script type='text/javascript'>alert('Bạn vui lòng kiểm tra lại số chỗ còn nhận');</script>";
        }
        
    // save session
        // $data = $request->session()->all();
       $data = $req->input('contactname');
       $req->session()->put('name',$data);
       if($req->session()->has('name')) 
        { 
            $info = $req->session()->get('name');
        }

        $data1 = $req->input('address');
        $req->session()->put('address',$data1);
        if($req->session()->has('address')) 
        { 
            $info = $req->session()->get('address');
        }

        $data2 = $req->input('mobilePhone');
        $req->session()->put('mobilePhone',$data2);
        if($req->session()->has('mobilePhone')) 
        { 
            $info = $req->session()->get('mobilePhone');
        }

        $data3 = $req->input('email');
        $req->session()->put('email',$data3);
        if($req->session()->has('email')) 
        { 
            $info = $req->session()->get('email');
        }
        
        // $listCustomer = array();
        for($i=1; $i <= $numPassenger ; $i++)
        {
            $data1 = $req->input('name'.$i);
            $req->session()->put('name'.$i,$data1);
            $data2 = $req->input('sex'.$i);
            $req->session()->put('sex'.$i,$data2);
            $data3 = $req->input('address'.$i);
            $req->session()->put('address'.$i,$data3);
            $data4 = $req->input('phone'.$i);
            $req->session()->put('phone'.$i,$data4);

            $list_customer = new ListCustomer;
            $list_customer->id_customer = $customerContact->id;
            $list_customer->name =Session::get('name'.$i);
            $list_customer->sexes =Session::get('sex'.$i); ;
            $list_customer->phone =Session::get('phone'.$i) ;
            $list_customer->address =Session::get('address'.$i);
            $list_customer->save();
        }
        
    return redirect('resultBookTour/'.Crypt::encrypt($id));
    }
    public function resultTour(Request $requset,$id)
    {
        $id= (int)Crypt::decrypt($id);

        $showtours = Cost::find($id);
        $showtours->tours()->where('id', $id)->get();
        $timetours = Tour::select(DB::raw("DATEDIFF(endDay,beginDay) as days"))
        ->where('id',$showtours->tours->id)->get();

        return view('pages.Tour.resultBookTour',compact('showtours','timetours'));

    }

    public function textBookTour()
    {
        return view('pages.Tour.text');
    }
   
}
