@extends('layouts.app')

@section('css')
<style>
    a#a { 
        font-size: 150%;
        color: #F4D03F;
        }

    a#b {
        font-size: 150%;
        color: #ECF0F1;
        }

    div p { 
        font-size: 150%;
        color: #F4D03F;
        }

    h2 { 
        color:#000080;
        } 
</style>
@endsection


@section('head')
<li class="nav-item active">
    <a class="nav-link" href="#">หน้าแรก
        <span class="sr-only">(current)</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">แจ้งความ</a>
</li>
@endsection







@section('content') @csrf
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
           
            <h1 style="background-color:Violet; padding-top:10px; padding-bottom:10px;" class="mt-5">Transfer</h1>
            <p class="lead">====================================================================================================</p>

            <div class="panel-heading">
                <form method="post" action="{{ route('transfer.update',$value->Car_Licence) }}">
                    @csrf
                    @method("PUT")
                    <div class="text-left">
                        <h2>---ข้อมูลเจ้าของรถ---</h2>
                        <div>
                        <a class="text" id='a'>เลขประจำตัวประชาชน :</a>
                        <a class="text" id='b'> {{ $value->User_Citizen }} </a>
                        <br>
                        <a class="text" id='a'>ชื่อ : </a>
                        <a class="text" id='b'> {{ $value->User_Name }} </a>
                        <br>
                        <a class="text" id='a'>นามสกุล : </a>
                        <a class="text" id='b'> {{ $value->User_Lname }} </a>
                        <br>
                    </div>
                    
                        <div class="text-left">
                            <label for="User" style="color: #F4D03F; font-size: 150%" >เลือกเจ้าของใหม่ : </label>
                            <div class="col-sm-5">
                            <select name="User" class="form-control">
                                @foreach($users as $row) 
                                <option value="{{ $row->User_Citizen }}">{{ $row->User_Citizen }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                            
                        <p class="lead">====================================================================================================</p>

                        <h2>-----ข้อมูลรถ-----</h2>

                        <a class="text" id='a'>ทะเบียนรถยนต์ : </a>
                        <a class="text" id='b'> {{ $value->Car_Licence }} </a>
                        <br>
                        <a class="text" id='a'>สีรถยนต์ : </a>
                        <a class="text" id='b'> {{ $value->Car_Color }} </a>
                        <br>
                        <a class="text" id='a'>แบรนด์ : </a>
                        <a class="text" id='b'> {{ $value->Brand_Name }} </a>
                        <br>
                        <a class="text" id='a'>รุ่น : </a>
                        <a class="text" id='b'> {{ $value->Brand_Genaration }} </a>
                        <br>
                        <a class="text" id='a'>ปีที่ผลิต : </a>
                        <a class="text" id='b'> {{ $value->Brand_Year }} </a>
                        <br>
                        <a class="text" id='a'>ประเภทรถยนต์ : </a>
                        <a class="text" id='b'> {{ $value->Brand_Type }} </a>
                        <br>
                        <a class="text" id='a'>เครื่องยนต์ : </a>
                        <a class="text" id='b'> {{ $value->Brand_Motor }} </a>
                        <br>
                        <a class="text" id='a'>น้ำมันที่ใช้ : </a>
                        <a class="text" id='b'> {{ $value->Brand_Gas }} </a>


                        <div class="text-right">
                            <button class="btn btn-lg btn-success" type="submit">บันทึก</button>
                        </div>

                    
                </form>
             </div>
        </div>
    </div>
</div>
@endsection