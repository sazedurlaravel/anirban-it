<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function view(){

        $data['allData'] = Income::all();
         return view('backend.income.index',$data);
    }
    public function add(){

         return view('backend.income.add');
    }

    public function store(Request $request){
        $request->validate([
            'income_source'=>'required',
            'date'=>'required',
            'amount'=>'required'
          
        ]);

        Income::create([
            'income_source'=>$request->income_source,
            'date'=>$request->date,
            'amount'=>$request->amount,
            'month'=>date('M'),
            'year'=>date('Y')

        ]);

        return redirect()->route('income.view');
    }
}
