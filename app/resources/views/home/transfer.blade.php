@extends('layouts.app') 

@section('css')
<style>
    div.a { 
        font-size: 150%;
        color:#ffffff; }

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
            <div class='a'>
            <h1 class="mt-5">Transfer</h1>
            <p class="lead">-------------------------------------------------------------</p>

            <div class="panel-heading">
                <form method="post" action="{{ transfer.update,$value->Car_Licence }}">


                    <h1>ข้อมูลเจ้าของรถ</h1>
                    <div>
                        <p class="text-left">เลขประจำตัวประชาชน : {{ $value->User_Citizen }}</p>
                        <p class="text-left">ชื่อ : {{ $value->User_Name }}</p>
                        <p class="text-left">นามสกุล : {{ $value->User_Lname }}</p>
                    </div>
                    <div class="text-left">
                        <label for="User">เลือกเจ้าของใหม่ : </label>
                        <select name="User" class="form-control">
                            @foreach($users as $row)
                            <option value="{{ $row->User_Citizen }}">{{ $row->User_Citizen }}</option>
                            @endforeach
                        </select>
                    </div>

                    <p class="lead">-------------------------------------------------------------</p>
                    <h1>ข้อมูลรถ</h1>

                    <p class="text-left">ทะเบียนรถยนต์ : {{ $value->Car_Licence }} </p>
                    <p class="text-left">สีรถยนต์ :{{ $value->Car_Color }} </p>
                    <p class="text-left">แบรนด์ :{{ $value->Brand_Name }} </p>
                    <p class="text-left">รุ่น : {{ $value->Brand_Genaration }} </p>
                    <p class="text-left">ปีที่ผลิต : {{ $value->Brand_Year }} </p>
                    <p class="text-left">ประเภทรถยนต์ : {{ $value->Brand_Type }} </p>
                    <p class="text-left">เครื่องยนต์ : {{ $value->Brand_Motor }} </p>
                    <p class="text-left">น้ำมันที่ใช้ : {{ $value->Brand_Gas }} </p>


                    <div class="text-right">
                        <button class="btn btn-lg btn-success" type="submit">Save</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection