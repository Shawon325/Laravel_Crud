<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use Session;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $teacher['perpage'] = $perpage = $request->input('changer' , 10);
        $page = $request->input('page' , 1);
        $teacher['sl'] = ($page-1)*$perpage+1;
        $teacher['search'] = $search = $request->search;
        $teacher['data'] = Teacher::when($search , function($query)use($search){
            $query->where('teacher_name' , 'like' , "%{$search}%")
                  ->orWhere('department' , 'like' , "%{$search}%")
                  ->orWhere('email' , 'like' , "%{$search}%")
                  ->orWhere('address' , 'like' , "%{$search}%")
                  ->orWhere('phone_number' , 'like' , "%{$search}%");
        })->orderBy('id' , 'desc')->paginate($perpage);
        return view('teacher.index' , $teacher);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = $request->validate([
            'teacher_name' => 'required',
            'department'   => 'required',
            'email'        => 'required|email',
            'address'      => 'required',
            'phone_number' => 'required'
        ]);
        Teacher::create($request->all());
        Session::flash('Success' , 'Data Inserted Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $id)
    {
        Teacher::where('id',$id)->delete();
        Session::flash('Success','SuccessFUlly Deleted');
        return back();
    }
}
