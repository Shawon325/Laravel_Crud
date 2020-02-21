@extends('layout.index')

@section('content')
<div class="card">
  @if($suucess=Session::get('Success'))
  <div class="alert alert-info">{{$suucess}}</div>
  @endif
    <div class="card-body">
        <h1 class="card-title">Teacher List</h1>
          <div style="text-align: right"><a href="{{route('teacher.create')}}" class="btn btn-primary pull-right">Add New</a></div>
          <br>
          <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
	          <div class="row">
		          <div class="col-sm-12 col-md-6">
		          	<div class="dataTables_length" id="zero_config_length">
		          		<label>Show <select name="zero_config_length" aria-controls="zero_config" class="form-control form-control-sm" id="changer">
		          			<option value="10">10</option>
		          			<option @if($perpage==25) {{'selected'}} @endif value="25">25</option>
		          			<option @if($perpage==50) {{'selected'}} @endif value="50">50</option>
		          			<option @if($perpage==100) {{'selected'}} @endif value="100">100</option>
		          		</select> entries</label>
		          	</div>
		          </div>

		          <div class="col-sm-12 col-md-6">
			          <div id="zero_config_filter" class="dataTables_filter">
			          	<form method="get" id="searchform">
				          	<label><input type="search" class="form-control form-control-sm" aria-controls="zero_config" name="search" id="search" value="{{$search}}">
				          	</label><button type="submit" class="btn btn-success btn-sm" >Search</button>
			          	</form>
			          </div>
		      	  </div>
              </div>
      	  </div>

        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
              
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Teacher Name</th>
                    <th>Department</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $value)
                  <tr>
                    <td>{{$sl++}}</td>
                    <td>{{$value->teacher_name}}</td>
                    <td>{{$value->department}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->address}}</td>
                    <td>{{$value->phone_number}}</td>
                    <td>
                      <form method="post" action="{{route('teacher.destroy' , $value->id)}}">
                        <a class="btn btn-primary" href="">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure?')">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
            {{$data->links()}}
        </div>

    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$("#changer").change(function(){
			var changer = $(this).val();
			var search = $("#search").val();
			location.replace("{{route('teacher.index')}}"+"?changer="+changer+"&search="+search);
		});
		$("#searchform").submit(function(e){
			e.preventDefault();
			var changer = $("#changer").val();
			var search = $("#search").val();
			location.replace("{{route('teacher.index')}}"+"?changer="+changer+"&search="+search);
		});
		$(".pagination").on("click" , "a" , function(e){
			e.preventDefault();
			var pageurl = $(this).attr("href");
			var changer = $("#changer").val();
			var search = $("#search").val();
			location.replace(pageurl+"&changer="+changer+"&search="+search);
		});
	});
</script>
@endsection