<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
	
	 public function homePage()
    {
        return view('home');
    }
	
	
	 public function postcodes(Request $request)
        {
            $postcodes = DB::table("postcodes")->where("postcode",$request->postcode_id)->first();
			$areas = DB::table('areas')->where("id",$postcodes->area_id)->first();
			
			 return response()->json(['data'=>$postcodes , 'areas'=> $areas]);
			 
        }

        public function getStateList(Request $request)
        {
			//print_r($request); die;
            $areas = DB::table("areas")
            ->where("id",$request->country_id)
            ->first("*");
            return response()->json($areas);
        }

        public function getCityList(Request $request)
        {
            $cities = DB::table("cities")
            ->where("state_id",$request->state_id)
            ->first("name","id");
            return response()->json($cities);
        }
	
	
	
	
	
}
