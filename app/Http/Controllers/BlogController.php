<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Models\Category;
class BlogController extends Controller
{
    public function create(Request $request){
        $categories =Category::all();
        return view('blog.form',compact('categories'));
    }
    public function stored(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id'=>'required',
            'status' =>'required',
            'image' =>'required',
        ]);

        $product= new Blog();
        $product->title=$request->title;
        $product->description=$request->description;
        $product->status=$request->status;
        $product->category_id=$request->category_id;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads_image',$filename);
            $product->image = $filename;

        }


        $product->save();
        return redirect()->route('blog.table')->with('message','added successfully');
    }
    public function table(){
        $product= Blog::with('category')->latest()->paginate(10);

        return view('blog.index',compact('product'));

    }
    public function edit($id){
        $categories= Category::all();
        $product=Blog::with('category')->find($id);
        return view('blog.edit',compact('product','categories'));
    }
    public function update(Request $request,$id ){
       $this->validate($request,[
        'title'=>'required',
        'description'=>'required',
        'status'=>'required',
        'category_id'=>'required',
       ]);
        $product=Blog::find($id);
        $product->title=$request->title;
        $product->description=$request->description;
        $product->status=$request->status;
        $product->category_id=$request->category_id;
        $product->save();
        return redirect()->route('blog.table')->with('message','update successfully');
    }
    public function delete($id){
        $product=Blog::find($id);
        $product->delete();
        return redirect()->route('blog.table')->with('message','remove successfully');
    }

}

