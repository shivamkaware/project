<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shiv;

class ShivController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $shiv= new Shiv();
        $shiv->title=$request->title;
        $shiv->description=$request->description;
        $shiv->save();
        return redirect()->route('table')->with('message','added successfully');
    }


    public function index(){
        $shiv= Shiv::all();
        return view('table',compact('shiv'));
    }
    public function edit($id){
        $shiv=Shiv::find($id);
        return view('edit',compact('shiv'));
    }

    public function update(Request $request,$id ){
        $shiv=Shiv::find($id);
        $shiv->title=$request->title;
        $shiv->description=$request->description;
        $shiv->save();
        return redirect()->route('table')->with('message','update successfully');
    }

    public function delete($id){
        $shiv = Shiv::find($id);
        $shiv->delete();
        return redirect()->Route('table')->with('message','removed successfully');
    }
}
