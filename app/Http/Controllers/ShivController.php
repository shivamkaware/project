<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Shiv;

class ShivController extends Controller
{

    // public function create(){
    //     return view('blog.form');
    // }
    // public function store(Request $request){
    //     $request->validate([
    //         'title' => 'required',
    //         'description' => 'required',
    //         'status' =>'required',
    //     ]);
    //     $shiv= new Shiv();
    //     $shiv->title=$request->title;
    //     $shiv->description=$request->description;
    //     $shiv->status=$request->status;
    //     $shiv->save();
    //     return redirect()->route('table')->with('message','added successfully');
    // }


    public function index(){
        $shivs= Shiv::paginate(10);
        return view('blog.index',compact('shivs'));

    }
    // public function edit($id){
    //     $shiv=Shiv::find($id);
    //     return view('',compact('shiv'));
    // }

    public function update(Request $request,$id ){
        $shiv=Shiv::find($id);
        $shiv->title=$request->title;
        $shiv->description=$request->description;
        $shiv->status=$request->status;
        $shiv->save();
        return redirect()->route('table')->with('message','update successfully');
    }

    public function delete($id){
        $shiv =Shiv::find($id);
        $shiv->delete();
        return redirect()->Route('table')->with('message','removed successfully');
    }

}
