<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = DB::table('Car')
                ->join('Brand','Brand.Brand_ID','=','Car.Brand')
                ->select('Car.Car_Licence','Car.Car_Color','Brand.Brand_Name')
                ->get();

       return view('home.welcome',compact('data'));
    }

    public function index2()
    {
        $data = DB::table('Car')
                ->join('Brand','Brand.Brand_ID','=','Car.Brand')
                ->select('Car.Car_Licence','Car.Car_Color','Brand.Brand_Name')
                ->get();

       return view('home.all',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()   //method Create
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('Car')
                ->join('Brand','Brand.Brand_ID','=','Car.Brand')
                ->join('Users','Users.User_Citizen','=','Car.User')
                ->select('Car.Car_Licence',
                        'Car.Car_Color',
                        'Brand.Brand_Name',
                        'Brand.Brand_Genaration',
                        'Brand.Brand_Year',
                        'Brand.Brand_Type',
                        'Brand.Brand_Motor',
                        'Brand.Brand_Gas',
                        'Users.User_Citizen',
                        'Users.User_Name',
                        'Users.User_Lname',
                        'Users.User_BirthDay',
                        'Users.User_Country',
                        'Users.User_Province',
                        'Users.User_Post',
                        'Users.User_Address')
                ->where('Car.Car_Licence',$id)
                ->get();
        $case = DB::table('Case')
                ->join('Car','Car.Car_Licence','=','Case.OwnerCar')
                ->select('Case.Case_Detail',
                        'Case.Case_Date')
                ->where('Case.OwnerCar',$id)
                ->get();
        return ($data) 
        //return view('home.detail',compact('data','case'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
