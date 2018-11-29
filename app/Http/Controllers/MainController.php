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
        $items = Test::all();
        return view('crud_ajax.index', compact('items'));
    }

    public function index2()
    {
        $items = Test::all();
        return view('index2', compact('items'));
    }

    public function treeview()
    {
        $names = Test::where('parent_id', '=', 0)->orderBy('parent_id', 'asc')->get();
        return view('tree', compact('names'));
    }

    public function search(Request $request)
    {

        $ser = $request->get('s');
        $items = DB::table('tests')
            ->where('name', 'like', '%' . $ser . '%')
            ->orWhere('parent_id', 'like', '%' . $ser . '%')
//            ->orWhere('position', 'like', '%' . $ser . '%')
//            ->orWhere('salary', 'like', '%' . $ser . '%')
            ->paginate(15);
        return view('crud_simple.result', compact('items'));
    }

    public function searchAjax(Request $request)
    {
        $word = $request->get('search');
        $units = DB::table('employees')->where('name', 'like', '%' . $word . '%')->paginate(15);
        return Response($units);

    }

    public function store(Request $request)
    {
        $item = new Test($request->all());
        $item->save();
        return response()->json($item);
//        return response($item);
    }

    public function ajax()
    {
         return back();
    }

    public function show1()
    {
        $items = Test::all();
        return view('show1', compact('items'));
    }


}
