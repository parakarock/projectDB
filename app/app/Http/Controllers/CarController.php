<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use DB;

class CarController extends Controller
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
        $users = DB::table('Users')
                ->select('User_Citizen')
                ->get();
        $brands = DB::table('Brand')
                ->select('Brand_ID','Brand_Name')
                ->get();

       return view('home.insert',compact('users','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
         $request->validate(
            [
                'Car_Licence' => 'required|max:10',
                'Car_Color' => 'required|max:150',
                'Car_Outday' => 'required',
                'Brand' => 'required',
                'User' => 'required'
                
            ]
            );
        
        $car = new Car;
        $car->Car_Licence = $request->get('Car_Licence');
        $car->Car_Color = $request->get('Car_Color');
        $car->Car_Outday = date($request->get('Car_Outday'));
        $car->Brand = $request->get('Brand');
        $car->User = $request->get('User');
        $car->save();

        $data = DB::table('Car')
                ->join('Brand','Brand.Brand_ID','=','Car.Brand')
                ->select('Car.Car_Licence','Car.Car_Color','Brand.Brand_Name')
                ->get();

       return view('home.all',compact('data'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $car = Car::find($Car_Licence->$id);
        // $car->delete();
        DB::delete('delete from Car where Car_Licence = ?',[$id]);

        $data = DB::table('Car')
                ->join('Brand','Brand.Brand_ID','=','Car.Brand')
                ->select('Car.Car_Licence','Car.Car_Color','Brand.Brand_Name')
                ->get();

       return view('home.all',compact('data')); 
        // return $id;
    }
}
