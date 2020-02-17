@extends('layout.index')

@section('content')
<div class="card">
                            <form method="post" action="{{route('department.store')}}">
                              @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Department Info</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Department Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Department Name" name="department_name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" placeholder="Enter Description" name="description">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="email1" placeholder="Enter Status" name="status">
                                        </div>
                                    </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
@endsection


<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Teacher form</h2>
  <form method="post" action="{{route('department.store')}}">
  	@csrf
    <div class="form-group">
      <label class="control-label col-sm-2">Department Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"placeholder="Enter Department Name" name="department_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Description:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"placeholder="Enter Description" name="description">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Status:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"placeholder="Enter Status" name="status">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html> -->