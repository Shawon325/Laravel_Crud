<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Department extends Controller
{
    public function data_group()
    {
    	$a=DB::table('departmnet')->groupBy('department_name')->get();
		echo "<pre>";
		print_r($a);
    }

    public function data_count()
    {
    	$a=DB::table('departmnet')->count();
		echo "<pre>";
		print_r($a);
    }
}