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
            <h1 class="mt-5">ข้อมูลรถยนต์ทั้งหมด</h1>
            <p class="lead">-------------------------------------------------------------</p>
            
            <div class="containe">
            <div class="row">
            <div class="col-12 col-sm-6 col-md-10">
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
            </div>
    
            <div class="col-6 col-md-2">
            <div class="text-right">
  	            <br>
                <button type="button" class="btn btn-primary" style="width:110px;height:50px">All</button>
            </div>
            </div>  
        </div>
    </div>
            <br>
            <div class="text-left">
  	            <button type="button" class="btn btn-primary">Insert</button>
            </div>
            <br>
               
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Car_License</th>
                        <th scope="col">Car_Color</th>
                        <th scope="col">Brand_Name</th>
                        <th scope="col" colspan='2'>Operation</th>
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
                        <td><a href="{{ route('home.edit',$row->Car_Licence) }}" class="btn btn-warning">Edit</a></td>
                        <td><form action="{{ route('home.destroy',$row->Car_Licence) }}" method="post">
                            @csrf
                            @method("DELETE")
        
                            <button class="btn btn-danger">Delete</button>
                            </form>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection