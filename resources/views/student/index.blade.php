@extends('layout.index')

@section('content')
<div class="card">
  @if($suucess=Session::get('Success'))
  <div class="alert alert-info">{{$suucess}}</div>
  @endif
    <div class="card-body">
        <h3 class="card-title">Student List</h3>
          <a href="{{route('student.create')}}" class="btn btn-primary pull-right">Add New</a>
          <br>
          <br>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
              
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Student Name</th>
                    <th>Department</th>
                    <th>Roll</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $value)
                  <tr>
                    <td>{{$sl++}}</td>
                    <td>{{$value->student_name}}</td>
                    <td>{{$value->department}}</td>
                    <td>{{$value->student_roll}}</td>
                    <td>{{$value->mobile_number}}</td>
                    <td>
                      <form method="post" action="{{route('student.destroy' , $value->id)}}">
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
        </div>

    </div>
</div>
@endsection
@section('script')
<script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
@endsection
