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
			
			 return response()->json(['data'=>$postcodes, 'areas'=> $areas]);
			 
        }

        public function getStateList(Request $request)
        {
			//print_r($request); die;
            $areas = DB::table("areas")
            ->where("id",$request->country_id)
            ->first("*");
            return response()->json($areas);
        }

       
	   
	
		public function google_map(Request $request){
			if($request->ajax()){
		
			$circle_radius = 6371; 
			$max_distance = 5;
			//dd($request->lng); 


$location = DB::select('SELECT * FROM (SELECT id,lat,lng, (' . $circle_radius . ' * acos(cos(radians(' . $request->lat . ')) * cos(radians(lat)) * cos(radians(lng) - radians(' . $request->lng . ')) + sin(radians(' . $request->lat . ')) * sin(radians(lat)))) AS distance FROM markers) AS distances WHERE distance < 5 ORDER BY distance'); 			
		 	//$location = DB::select('SELECT * FROM (SELECT id, (' . $circle_radius . ' * acos(cos(radians(' . $request->lat . ')) * cos(radians(lng)) * cos(radians(lat) - radians(' . $request->lng . ')) + sin(radians(' . $request->lat. ')) * sin(radians(lat)))) AS distance FROM markers) AS distances WHERE distance < ' . $max_distance . ' ORDER BY distance'); 
			
			//dd($location);
			return response()->json($location);
			}
			
			
			return view('google_map');
			
		
		}
	
	
	
	
}
