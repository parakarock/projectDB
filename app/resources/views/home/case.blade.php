@extends('layouts.app') 
@section('head')
<li class="nav-item active">
    <a class="nav-link" href="/">หน้าแรก</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/case">แจ้งความ
        <span class="sr-only">(current)</span>
    </a>
</li>
@endsection
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">แจ้งความ</h1>
            <p class="lead">-------------------------------------------------------------</p>
            <div class="panel-heading">
                <form method="post" action="">

                    <div class="form-group">
                        <label for="Car_Licence">ทะเบียนรถยนต์</label>
                        <input type="text" name="Car_Licence" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Case_Detail">ข้อหา</label>
                        <input type="text" name="Case_Detail" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Case_WhoName">ชื่อผู้แจ้ง</label>
                        <input type="text" name="Case_WhoName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Case_Phone">เบอร์โทรผู้แจ้ง</label>
                        <input type="text" name="Case_Phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="OwnerCar">เจ้าของรถยนต์</label>
                        <input type="text" name="OwnerCar" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Case_Date">วันที่ผู้แจ้ง</label>
                        <input type="date" name="Case_date" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">ตกลง</button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection