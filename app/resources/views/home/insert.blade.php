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
    <a class="nav-link" href="/">หน้าแรก
        <span class="sr-only">(current)</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/case">แจ้งความ</a>
</li>

@endsection















@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class='a'>
            <h1 class="mt-5">Insert</h1>
            <p class="lead">====================================================================================================</p>
            <p class="lead">ข้อมูลเจ้าของรถ</p>
            <div class="panel panel-default">

                <div class="panel-heading">
                    <form method="post" action="{{ route('user.store') }}">
                        {{ csrf_field() }}

                
                        <div class="text-left">
                            <label for="User_Citizen">หมายเลขบัตรประชาชน : </label>
                            <input type="text" id="User_Citizen" class="from-control"/>
                        </div>
                    

                        <div class="text-left">
                            <label for="User_Name"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; ชื่อ : </label>
                            <input type="text" name="User_Name" class="text-right">

                        </div>

                        <div class="text-left">
                            <label for="User_Lname"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;นามสกุล : </label>
                            <input type="text" name="User_Lname" class="text-right">
                        </div>

                        <div class="text-left">
                            <label for="User_BirthDay"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;วันเกิด : </label>
                            <input type="date" name="User_BirthDay" class="text-right">
                        </div>

                        <div class="text-left">
                            <label for="User_Country"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; ประเทศ : </label>
                            <input type="text" name="User_Country" class="text-right">
                        </div>

                        <div class="text-left">
                            <label for="User_Province"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; จังหวัด : </label>
                            <input type="text" name="User_Province" class="text-right">
                        </div>

                        <div class="text-left">
                            <label for="User_Post"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; รหัสไปรษณีย์ : </label>
                            <input type="text" name="User_Post" class="text-right">
                        </div>

                        <div class="text-left">
                            <label for="User_Address"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; ที่อยู่ : </label>
                            <textarea class="text-right" name="User_Address" rows="3"></textarea>
                        </div>
                        
                        <div>
                            <button class="btn btn-lg btn-success" type="submit">Submit</button>
                        </div>
                    </form>
                    <p class="lead">-----------------------------------------------------------------------------</p>
                    <p class="lead">ข้อมูลแบรนด์</p>
                    <form method="post" action="{{ route('brand.store') }}">
                        {{ csrf_field() }}
                        <div class="text-left">
                            <label for="Brand_Name"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; ชื่อแบรนด์ : </label>
                            <input type="text" name="Brand_Name" class="text-right">
                        </div>

                        <div class="text-left">
                            <label for="Brand_Genaration"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;  รุ่น : </label>
                            <input type="text" name="Brand_Genaration" class="text-right">
                        </div>

                        <div class="text-left">
                            <label for="Brand_Year"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; ปีที่ผลิต : </label>
                            <input type="text" name="Brand_Year" class="text-right">
                        </div>

                        <div class="text-left">
                            <label for="Brand_Type">  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; ประเภทรถยนต์ : </label>
                            <input type="text" name="Brand_Type" class="text-right">
                        </div>

                        <div class="text-left">
                            <label for="Brand_Motor">  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; เครื่องยนต์ : </label>
                            <input type="text" name="Brand_Motor" class="text-right">
                        </div>

                        <div class="text-left">
                            <label for="Brand_Gas">  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; น้ำมันที่ใช้ : </label>
                            <input type="text" name="Brand_Gas" class="text-right">
                        </div>
                        
                        <div>
                            <button class="btn btn-lg btn-success" type="submit">Submit</button>
                        </div>
                    </form>
                    <p class="lead">-----------------------------------------------------------------------------</p>
                    <p class="lead">ข้อมูลรถยนต์</p>
                    <form method="post" action="{{ route('car.store') }}">
                        {{ csrf_field() }}
                        <div class="text-left">
                            <label for="Car_Licence"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; ทะเบียน : </label>
                            <input type="text" name="Car_Licence" class="from-control">
                            <br>
                        </div>

                        <div class="text-left">
                            <label for="Car_Color"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; สีรถยนต์ : </label>
                            <input type="text" name="Car_Color" class="text-right">
                        </div>

                        <div class="text-left">
                            <label for="Car_Outday"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; วันที่ออกรถ : </label>
                            <input type="date" name="Car_Outday" class="text-right">
                        </div>

                        <div class="text-left">
                            <label for="User"> เลขประจำตัวประชาชน : </label>
                            <select name="User" class="text-right">
                                @foreach($users as $row)
                                <option value="{{ $row->User_Citizen }}">{{ $row->User_Citizen }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-left">
                            <label for="Brand"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; ยี่ห้อรถ : </label>
                            <select name="Brand" class="text-right">
                                @foreach($brands as $row)
                                <option value="{{ $row->Brand_ID }}">{{ $row->Brand_Name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <button class="btn btn-lg btn-success" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection