<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\Investor;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function view(){

        $data['allData'] = Investor::all();
         return view('backend.investor.index',$data);
    }
    public function add(){

         return view('backend.investor.add');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'date'=>'required',
            'amount'=>'required'
          
        ]);

          
        $investor = Investor::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'date'=>$request->date,
            'amount'=>$request->amount,
            'month'=>date('M'),
            'year'=>date('Y'),

        ]);

        Income::create([
            'income_source'=>$request->name,
            'date'=>$request->date,
            'amount'=>$request->amount,
            'month'=>date('M'),
            'year'=>date('Y'),

        ]);

        return redirect()->route('investor.view');
    }
}
