<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Student extends Controller
{
    public function index()
    {
    	$a=DB::table('student_info')->groupBy('mother_name')->get();
		echo "<pre>";
		print_r($a);
    }
}
