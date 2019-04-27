@extends('layouts.app') 
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
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Insert</h1>
            <p class="lead">ข้อมูลเจ้าของรถ</p>
            <div class="panel panel-default">

                <div class="panel-heading">
                <form method="post" action="{{ route('insert.store') }}">
                    {{ csrf_field()}}
                    <div class="form-group">
                        <label for="User_Citizen">หมายเลขบัตรประชาชน</label>
                        <input type="text" name="User_Citizen" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="User_Name">ชื่อ</label>
                        <input type="text" name="User_Name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="User_Lname">นามสกุล</label>
                        <input type="text" name="User_Lname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="User_BirthDay">วันเกิด</label>
                        <input type="date" name="User_BirthDay" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="User_Country">ประเทศ</label>
                        <input type="text" name="User_Country" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="User_Province">จังหวัด</label>
                        <input type="text" name="User_Province" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="User_Posty">รหัสไปรษณีย์</label>
                        <input type="text" name="User_Post" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="User_Address">ที่อยู่</label>
                        <input type="text" name="User_Address" class="form-control">
                    </div>

                    <p class="lead">-----------------------------------------------------------------------------</p>
                    <p class="lead">ข้อมูลแบรนด์</p>
                    <div class="form-group">
                        <label for="Brand_Name">ชื่อแบรนด์</label>
                        <input type="text" name="Brand_Name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Brand_Genaration">รุ่น</label>
                        <input type="text" name="Brand_Genaration" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Brand_Year">ปีที่ผลิต</label>
                        <input type="text" name="Brand_Year" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Brand_Type">ประเภทรถยนต์</label>
                        <input type="text" name="Brand_Type" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Brand_Motor">เครื่องยนต์</label>
                        <input type="text" name="Brand_Motor" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Brand_Gas">น้ำมันที่ใช้</label>
                        <input type="text" name="Brand_Gas" class="form-control">
                    </div>

                    <p class="lead">-----------------------------------------------------------------------------</p>
                    <p class="lead">ข้อมูลรถยนต์</p>

                    <div class="form-group">
                        <label for="Car_Licence">ทะเบียน</label>
                        <input type="text" name="Car_Licence" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Car_Color">สีรถยนต์</label>
                        <input type="text" name="Car_Color" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Car_Outday">วันที่ออกรถ</label>
                        <input type="date" name="Car_Outday" class="form-control">
                    </div>



                    <button class="btn btn-lg btn-success" type="submit">SAVE</button>

                </div>
            </div>   
        </div>
    </div>
</div>
@endsection