@extends('layouts.master')
@section('content')
<div class="container">
<h2>edit information</h2>
<form action="{{route('blog.update',$product->id)}}" method="POST" >
    @csrf
{{-- @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif --}}
<div class="card card-primary">
<div class="card-header">
  <h3 class="card-title">Form</h3>
</div>
<!-- /.card-header -->
<!-- form start -->

<div class="card-body">
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" class="form-control"  placeholder="Enter email" value="{{$product->title}}" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
   <textarea type="text" name="description" id="" class="form-control"  cols="30" rows="5" >{{$product->description}}</textarea>
  </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Status</label>

        <select name="status" class="form-control" value="{{$product->status}} >
          <option value="" class="option_color">select status</option>
        <option value="1">Active</option>
        <option value="0">Deactive</option>
        </select>
    </div>
    <div class="form-group">
          <label for="exampleInputEmail1">select category</label>
          <select name="category_id"  select id="category_id" class="form-control" >
            @foreach ($categories as $c )
            <option value="{{$c->id}}" @if($c->id==$product->category->id) selected='selected' @endif>{{$c->name}}</option>
            @endforeach
        </select>

        <div class="form-group">
            <label for="profile image">Profile image</label>
            <input type="file" name="image"  id="image" class="form-control"  placeholder="Uplode Profile image" value="{{old('image')}}">
          </div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

</div>
</div>
</div>

@endsection
