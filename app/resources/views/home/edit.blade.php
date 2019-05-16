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
        color: #000080;
    }
</style>
@endsection



@section('head')
<li class="nav-item active">
    <a class="nav-link" href="/"><i class="fa fa-home"></i> หน้าแรก
        <span class="sr-only">(current)</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/case"><i class="fa fa-pencil"></i> แจ้งความ </a>
</li>
@endsection






@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">

            <h1 style="background-color:Violet; padding-top:10px; padding-bottom:10px;" class="mt-5">แก้ไขข้อมูล</h1>
            <div class="text-left">
                <p class="lead">
                    ====================================================================================================
                </p>

                <a class="text" id='a'>ทะเบียนรถยนต์ : </a>
                <a class="text" id='b'> {{ $item->Car_Licence }} </a>
                <br>
                <a class="text" id='a'>สีรถยนต์ : </a>
                <a class="text" id='b'> {{ $item->Car_Color }} </a>
                <br>
                <a class="text" id='a'>แบรนด์ : </a>
                <a class="text" id='b'> {{ $item->Brand_Name }} </a>
                <br>
                <a class="text" id='a'>รุ่น : </a>
                <a class="text" id='b'> {{ $item->Brand_Genaration }} </a>
                <br>
                <a class="text" id='a'>ปีที่ผลิต : </a>
                <a class="text" id='b'> {{ $item->Brand_Year }} </a>
                <br>
                <a class="text" id='a'>ประเภทรถยนต์ : </a>
                <a class="text" id='b'> {{ $item->Brand_Type }} </a>
                <br>
                <a class="text" id='a'>เครื่องยนต์ : </a>
                <a class="text" id='b'> {{ $item->Brand_Motor }} </a>
                <br>
                <a class="text" id='a'>น้ำมันที่ใช้ : </a>
                <a class="text" id='b'> {{ $item->Brand_Gas }} </a>
                <br>
            </div>


            <div class="text-left">
                <p class="lead">
                    ====================================================================================================
                </p>
                <h2>---ข้อมูลเจ้าของรถ---</h2>
            </div>


            <!-- <div class="col-sm-5"> -->
            <form method="post" action="{{ route('car.update',$item->User_Citizen) }}">
                @csrf
                @method("PUT")


                <div class="col-sm-5">

                    <div class="form-group{{ $errors->has('User_Citizen') ? ' has-error' : '' }}">
                        <p class="text-left" for="User_Citizen">เลขประจำตัวประชาชน : </p>
                        <input type="text" class="form-control" value='{{ $item->User_Citizen }}' readonly>
                    </div>

                    <div class="form-group{{ $errors->has('User_Name') ? ' has-error' : '' }}">
                        <p class="text-left" for="User_Name">ชื่อ : </p>
                        <input type="text" name="User_Name" class="form-control" value='{{ $item->User_Name }}'>
                        <small class="text-danger">{{ $errors->first('User_Name') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('User_Lname') ? ' has-error' : '' }}">
                        <p class="text-left" for="User_Lname">นามสกุล : </p>
                        <input type="text" name="User_Lname" class="form-control" value='{{ $item->User_Lname }}'>
                        <small class="text-danger">{{ $errors->first('User_Lname') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('User_BirthDay') ? ' has-error' : '' }}">
                        <p class="text-left" for="User_BirthDay">วันเกิด : </p>
                        <input type="date" name="User_BirthDay" class="form-control" value='{{ $item->User_BirthDay }}'
                            readonly>
                        <small class="text-danger">{{ $errors->first('User_BirthDay') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('User_Country') ? ' has-error' : '' }}">
                        <p class="text-left" for="User_Country">ประเทศ : </p>
                        <input type="text" name="User_Country" class="form-control" value='{{ $item->User_Country }}'>
                        <small class="text-danger">{{ $errors->first('User_Country') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('User_Province') ? ' has-error' : '' }}">
                        <p class="text-left" for="User_Province">จังหวัด : </p>
                        <input type="text" name="User_Province" class="form-control" value='{{ $item->User_Province }}'>
                        <small class="text-danger">{{ $errors->first('User_Province') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('User_Post') ? ' has-error' : '' }}">
                        <p class="text-left" for="User_Post">รหัสไปรษณีย์ : </p>
                        <input type="text" name="User_Post" class="form-control" value='{{ $item->User_Post }}'>
                        <small class="text-danger">{{ $errors->first('User_Post') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('User_Address') ? ' has-error' : '' }}">
                        <p class="text-left" for="User_Address">ที่อยู่ : </p>
                        <input type="text" name="User_Address" class="form-control" value='{{ $item->User_Address }}'>
                        <small class="text-danger">{{ $errors->first('User_Address') }}</small>
                    </div>
                </div>


                <br>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-lg btn-success" type="submit">บันทึก</button>
                    </div>
                </div>


            </form>

            <br>
            <p class="lead">
                ====================================================================================================</p>
            <h2>------คดี------</h2>
            @if (count($case) === 0) <a class="text" style="color: MAROON; font-size: 130%">ไม่พบข้อมูล</a> @else
            @foreach ($case as $value)
            <a class="text" id='a'>ข้อหา : </a>
            <a class="text" id='b'> {{ $value->Case_Detail }} </a>
            <br>
            <a class="text" id='a'>วันที่แจ้ง : </a>
            <a class="text" id='b'> {{ $value->Case_Date }} </a>

            @endforeach @endif
        </div>


    </div>
</div>
</div>
@endsection