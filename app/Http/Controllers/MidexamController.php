<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MidexamController extends Controller
{

    public function index(){
        $items = DB::table('midexam')->get();
        return view('expenses',compact('expenses'));
    }

    public function store(Request $reqquest){
        DB::table('midexam')->insert([
            'item'=> $reqquest->item ,
            'amount'=> $reqquest->amount ,
            'Expense Date'=> $reqquest->Expense_Date ,
            'created_at'=> now() ,
            'updated_at'=> now()
        ]);
        return redirect()->back() ;
    }

    public function delete($id){
        DB::table('midexam')->where('id' , '=' , $id)->delete();
        return redirect()->back() ;

    }


}
