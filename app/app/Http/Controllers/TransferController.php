<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use DB;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $users = DB::table('Users')
                ->select('User_Citizen')
                ->get();
         foreach ($data as $value){

        }
         return view('home.transfer',compact('users','value'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        Car::where('Car_Licence', $id)->update( array('User'=>$request->get('User_Citizen') ));
        
        
        $data = DB::table('Car')
                ->join('Brand','Brand.Brand_ID','=','Car.Brand')
                ->select('Car.Car_Licence','Car.Car_Color','Brand.Brand_Name')
                ->get();

       return view('home.all',compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
