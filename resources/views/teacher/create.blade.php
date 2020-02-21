@extends('layout.index')

@section('content')
<div class="card">
    <div class="card-body">
        <h2 class="card-title">Teacher Info</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if($suucess=Session::get('Success'))
        <div class="alert alert-info">{{$suucess}}</div>
        @endif
        <form method="post" action="{{route('teacher.store')}}">
        @csrf
        <div class="form-group row">
            <label class="col-sm-3 text-right control-label col-form-label" for="teacher_name">Teacher Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Teacher Name" id="teacher_name" name="teacher_name" value="{{old('teacher_name')}}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 text-right control-label col-form-label" for="department">Department</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Department Name" id="department" name="department" value="{{old('department')}}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 text-right control-label col-form-label" for="email">email</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Email" id="email" name="email" value="{{old('email')}}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 text-right control-label col-form-label" for="address">Address</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Address" id="address" name="address" value="{{old('address')}}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 text-right control-label col-form-label" for="phone_number">Phone Number</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" placeholder="Enter Mobile Number" id="phone_number" name="phone_number" value="{{old('phone_number')}}">
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