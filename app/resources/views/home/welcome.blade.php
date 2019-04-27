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
            <h1 class="mt-5">ค้นหาเจ้าของรถ</h1>
            <p class="lead">-------------------------------------------------------------</p>
            <form class="card card-sm">
                <div class="card-body row no-gutters align-items-center">
                    <div class="col-auto">
                        <i class="fas fa-search h4 text-body"></i>
                    </div>
                    <!--end of col-->
                    <div class="col">
                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="ทะเบียนรถ">
                    </div>
                    <!--end of col-->
                    <div class="col-auto">
                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                    </div>
                    <!--end of col-->
                </div>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Car_License</th>
                        <th scope="col">Car_Color</th>
                        <th scope="col">Brand_Name</th>
                        <th scope="col">Operation</th>
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
                        <td><a href="{{ route('home.edit',$row->Car_Licence) }}" class="btn btn-warning">Detail</a></td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection