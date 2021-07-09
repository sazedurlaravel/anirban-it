<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use Illuminate\Http\Request;

class CostController extends Controller
{
    public function view(){

        $data['allData'] = Cost::orderBy('id','desc')->get();
         return view('backend.cost.index',$data);
    }
    public function add(){

         return view('backend.cost.add');
    }

    public function store(Request $request){
        $request->validate([
            'cost_source'=>'required',
            'date'=>'required',
            'person'=>'required',
            'amount'=>'required'
          
        ]);

        if($request->hasfile('recept'))
        {

           foreach($request->file('recept') as $recept)
           {
               $name=$recept->getClientOriginalName();
               $recept->move('public/uploads', $name);  
               $data[] = $name; 
           }
        }
        Cost::create([
            'cost_source'=>$request->cost_source,
            'date'=>$request->date,
            'person'=>$request->person,
            'amount'=>$request->amount,
            'month'=>date('M'),
            'year'=>date('Y'),
            'recept'=>json_encode($data)

        ]);

        return redirect()->route('cost.view');
    }
}
