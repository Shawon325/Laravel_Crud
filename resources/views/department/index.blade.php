@extends('layout.index')

@section('content')
<div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Department Datatable</h5>
                                  <a href="{{route('department.create')}}"><button class="btn btn-success">Add New</button></a>
                                  <br>
                                  <br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                      
                                        <thead>
                                          <tr>
                                            <th>Sl</th>
                                            <th>Department Name</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @php $sl=1;  @endphp
                                          @foreach($data as $info)
                                          <tr>
                                            <td>{{$sl++}}</td>
                                            <td>{{$info->department_name}}</td>
                                            <td>{{$info->description}}</td>
                                            <td>{{$info->status}}</td>
                                          </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
@endsection



<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Teacher Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<br>
<a href="{{route('department.create')}}"><button class="btn btn-success">Add New</button></a>
  <h2>Department Info</h2>           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sl</th>
        <th>Department Name</th>
        <th>Description</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    	@php $sl=1;  @endphp
    	@foreach($data as $info)
      <tr>
        <td>{{$sl++}}</td>
        <td>{{$info->department_name}}</td>
        <td>{{$info->description}}</td>
        <td>{{$info->status}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>


 -->