@extends('layout.index')

@section('content')
<div class="card">
  @if($suucess=Session::get('Success'))
  <div class="alert alert-info">{{$suucess}}</div>
  @endif
    <div class="card-body">
        <h3 class="card-title">Department Datatable</h3>
          <a href="{{route('department.create')}}" class="btn btn-primary pull-right">Add New</a>
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
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $info)
                  <tr>
                    <td>{{$sl++}}</td>
                    <td>{{$info->department_name}}</td>
                    <td>{{$info->description}}</td>
                    <td>{{$info->status}}</td>
                    <td>
                      <form method="post" action="{{route('department.destroy',$info->id)}}">
                        <a class="btn btn-primary" href="{{route('department.edit',$info->id)}}">Edit</a>
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
