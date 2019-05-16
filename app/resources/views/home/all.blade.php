@extends('layouts.app')
@section('css')

<style>

    div.a { 
        font-size: 150%;
        color:#ffffff; }
    div p { 
        font-size: 150%;
        color: #ECF0F1;
        }
    /* .btn {
        background-color: DodgerBlue
    } */

    

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



@section('flash-message')
@if ($messager = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $messager }}</strong>
</div>
@endif
@endsection





@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">

            <div class='a'>
            <h1 class="mt-5">ข้อมูลรถยนต์ทั้งหมด</h1>
            <p class="lead">====================================================================================================</p>
            <div class="container">
                <div class="row">


                    <div class="col-10 col-sm-8 col-md-10">
                        <form action="/search2" method="POST" role="search" class="card card-sm">
                            {{ csrf_field() }}
                            <div class="card-body row no-gutters align-items-center">
                                <div class="col-auto">
                                    <i class="fas fa-search h4 text-body"></i>
                                </div>
                                <!--end of col-->
                                <div class="col">
                                    <input class="form-control form-control-lg form-control-borderless" name="q"
                                        type="search" placeholder="ทะเบียนรถ">
                                </div>
                                <!--end of col-->
                                <div class="col-auto">
                                    <button class="btn btn-lg btn-success" type="submit" >Search </button>
                                </div>
                                <!--end of col-->

                            </div>
                        </form>
                    </div>

                    <div class="col-2">
                        <div class="text-right">
                            <a href="{{ route('car.create') }}" class="btn btn-primary" style="padding:20px 50px; margin-top: 15px;" >เพิ่มข้อมูล</a>
                        </div>
                    </div>
                </div>
            </div>
           
            <br> @if(isset($details))
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col">ทะเบียนรถยนต์</th>
                        <th scope="col">สี</th>
                        <th scope="col">แบรนด์</th>
                        <th scope="col" colspan='3'>ตัวดำเนินการ</th>
                    </tr>
                </thead>
                <?php $i=1; ?> @foreach($details as $row)
                <tbody>
                    <tr>
                        <th scope="row">
                            <?php echo $i++; ?>
                        </th>
                        <td>{{ $row->Car_Licence }}</td>
                        <td>{{ $row->Car_Color }}</td>
                        <td>{{ $row->Brand_Name }}</td>
                        <td><a href="{{ route('car.edit',$row->Car_Licence) }}" class="btn btn-warning">แก้ไข</a></td>
                        <td><a href="{{ route('home.update',$row->Car_Licence) }}" class="btn btn-dark">โอนรถ</a></td>
                        <td>
                            <form action="{{ route('home.destroy',$row->Car_Licence) }}" method="post">
                                @csrf @method("DELETE")
                                <button class="btn btn-danger">ลบ</button>
                            </form>
                    </tr>
                </tbody>
                @endforeach
            </table>
            @elseif(isset($message))
            <p> {{ $message }}</p>
            @else
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ลำดับ</th>
                        <th scope="col">ทะเบียนรถยนต์</th>
                        <th scope="col">สี</th>
                        <th scope="col">แบรนด์</th>
                        <th scope="col" colspan='3'>ตัวดำเนินการ</th>
                    </tr>
                </thead>
                <?php $i=1; ?> @foreach($data as $row)
                <tbody>
                    <tr>
                        <th scope="row">
                            <?php echo $i++; ?>
                        </th>
                        <td>{{ $row->Car_Licence }}</td>
                        <td>{{ $row->Car_Color }}</td>
                        <td>{{ $row->Brand_Name }}</td>
                        <td><a href="{{ route('car.edit',$row->Car_Licence) }}" class="btn btn-warning">แก้ไข</a></td>
                        <td><a href="{{ route('transfer.show',$row->Car_Licence) }}" class="btn btn-dark">โอนรถ</a></td>
                        <td>
                            <form action="{{ route('car.destroy',$row->Car_Licence) }}" method="post">
                                @csrf @method("DELETE")

                                <button class="btn btn-danger">ลบ</button>
                            </form>
                    </tr>
                </tbody>
                @endforeach
            </table>
            @endif
            </div>
        </div>
    </div>
</div>
@endsection