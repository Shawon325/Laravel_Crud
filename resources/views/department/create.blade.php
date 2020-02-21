@extends('layout.index')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Department Info</h4>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{route('department.store')}}">
        @csrf
        <div class="form-group row @error('department_name') is-invalid @enderror">
            <label class="col-sm-3 text-right control-label col-form-label" for="department_name">Department Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Department Name" id="department_name" name="department_name" value="{{old('department_name')}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="lname" class="col-sm-3 text-right control-label col-form-label" for="description">Description</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="lname" placeholder="Enter Description" id="description" name="description" value="{{old('description')}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 text-right control-label col-form-label" for="status">Status</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="email1" placeholder="Enter Status" id="status" name="status" value="{{old('status')}}">
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
