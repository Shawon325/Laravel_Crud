@extends('layout.index')

@section('content')
<div class="card">
    <div class="card-body">
        <h2 class="card-title">Student Info</h2>
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
        <form method="post" action="{{route('student.store')}}">
        @csrf
        <div class="form-group row @error('department_name') is-invalid @enderror">
            <label class="col-sm-3 text-right control-label col-form-label" for="student_name">Student Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Student Name" id="student_name" name="student_name" value="{{old('student_name')}}">
            </div>
        </div>

        <div class="form-group row @error('department') is-invalid @enderror">
            <label class="col-sm-3 text-right control-label col-form-label" for="department">Department</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Department Name" id="department" name="department" value="{{old('department')}}">
            </div>
        </div>

        <div class="form-group row @error('department_name') is-invalid @enderror">
            <label class="col-sm-3 text-right control-label col-form-label" for="student_roll">Student Roll</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" placeholder="Enter Student Roll" id="student_roll" name="student_roll" value="{{old('student_roll')}}">
            </div>
        </div>

        <div class="form-group row @error('department_name') is-invalid @enderror">
            <label class="col-sm-3 text-right control-label col-form-label" for="father_name">Father Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Father Name" id="father_name" name="father_name" value="{{old('father_name')}}">
            </div>
        </div>

        <div class="form-group row @error('department_name') is-invalid @enderror">
            <label class="col-sm-3 text-right control-label col-form-label" for="mother_name">Mother Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Mother Name" id="mother_name" name="mother_name" value="{{old('mother_name')}}">
            </div>
        </div>

        <div class="form-group row @error('department_name') is-invalid @enderror">
            <label class="col-sm-3 text-right control-label col-form-label" for="mobile_number">Phone Number</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" placeholder="Enter Mobile Number" id="mobile_number" name="mobile_number" value="{{old('mobile_number')}}">
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