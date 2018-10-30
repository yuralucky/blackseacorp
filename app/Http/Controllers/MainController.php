<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Test;
use http\Env\Response;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $units = Employee::all();
        return view('show', compact('units'));
    }

    public function indexAjax()
    {
        $units = Employee::all();
        return view('searchAjax', compact('units'));
    }

    public function treeview()
    {
        $names = Test::where('parent_id', '=', 0)->get();
        $allCategories = DB::table('tests')->pluck('name', 'id')->all();
        return view('tree', compact('names', 'allCategories'));
    }

    public function search(Request $request)
    {
        $ser = $request->get('s');
        $units = DB::table('employees')->where('name', 'like', '%' . $ser . '%')->get();
        return view('show', compact('units'));
    }

    public function searchAjax1(Request $request)
    {
        echo 'hi';
//        if ($request->ajax()) {
//            $employees = DB::table('employees')->where('name', 'like', '%' . $request->query . '%')->get();
//
//        }

    }

    public function save(Request $request)
    {
//        $this->validate($request,[
//            'name' => 'required|min:3'
//        ]);
        $input = $request->all();
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];

        Test::create($input);
        return back();
    }


    public function searchAjax(Request $request)
    {
        if ($request->ajax()) {
            $text = $request->input('query');
            if ($text != '') {
                $data = DB::table('employees')
                    ->where('name', 'like', '%' . $text . '%')
                    ->orWhere('salary', 'like', '%' . $text . '%')->get();
                $total_row = $data->count();
                if ($total_row == 0) {
                    $total_row = 'No found';
                }
            } else {
                $text = DB::table('employees')->get();
            }

        }
        $result = DB::table('employees')->where('name', 'like', '%' . $text . '%');
        return response()->json('result');

    }

}
