<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $units = Employee::all();
        return view('show', compact('units'));
    }

    public function search(Request $request)
    {
        $ser=$request->get('s');
        $search=DB::table('employees')->where('name','like','%'.$ser.'%')->get();
        return view('search',compact('search'));
    }

}
