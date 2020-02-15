<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Department extends Controller
{
    public function data_group()
    {
    	$a=DB::table('department')->groupBy('department_name')->get();
		echo "<pre>";
		print_r($a);
    }

    public function data_count()
    {
    	$a=DB::table('department')->count();
		echo "<pre>";
		print_r($a);
    }

    public function data_select()
    {
    	$a=DB::table('department')->select('id','department_name','status')->where('status','Active')->get();
    	echo "<pre>";
    	print_r($a);

    	$a=DB::table('department')->pluck('department_name');
    	echo "<pre>";
    	print_r($a);
    }

    // public function pluck()
    // {
    // 	$a=DB::table('department')->pluck('department_name');
    // 	echo "<pre>";
    // 	print_r($a);
    // }
}