<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store( Request $request){
        $request->validate([
            'name' => 'required',
            'status' =>'required',
        ]);
        $category =new Category();
        $category->name =$request->name;
        $category->status=$request->status;
        $category->save();
        return redirect()->route('table')->with('message','added successfully');

    }
    public function index(){
        $category=Category::paginate(10);
        return view ('categories.table',compact('category'));
    }
    public function edit($id){
            $category=Category::find($id);
             return view('categories.edit',compact('category'));
         }
         public function update(Request $request,$id ){
            $request->validate([
                'name' => 'required',
                'status' =>'required',
            ]);
            $category=Category::find($id);
            $category->name=$request->name;
            $category->status=$request->status;
            $category->save();
            return redirect()->route('table')->with('message','update successfully');
        }
        public function delete($id){
            $category=Category::find($id);
            $category->delete();
            return redirect()->route('table')->with('message','removed successfully');
        }

}
