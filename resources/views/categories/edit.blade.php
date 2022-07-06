{{-- @extends('layouts.master')
@section('content')

<div class="container">

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
</div>

<h2>edit information</h2>
<form action="{{Route('categories.update',$category->id)}}" method="POST">
@csrf


<div class="card card-primary">
<div class="card-header">
  <h3 class="card-title">Form</h3>
</div>

<!-- /.card-header -->
<!-- form start -->


<div class="card-body">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter name" value="{{$category->name}}" required>
  </div>


    <div class="form-group">
      <label for="exampleInputEmail1">Status</label>
      <select name="status" class="form-control" value="{{$category->status}}" required>
      <option value="" class="option_color">select status</option>
      <option value="1" @if($category->status=='1') selected='selected'@endif>Active</option>
      <option value="0"@if($category->status=='0') selected='selected'@endif>Deactive</option>
      </select>
    </div>


<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">update</button>
</div>
    </div>
</form>
<div class="card-footer">
<p align="right">
    <a href="{{route('table')}}"></a> <button class="btn btn-primary">Back</button>
     </p>
</div>
</div>
</div>
@endsection
 --}}
 @extends('layouts.master')
 @section('content')


 {{-- <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0">Category</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
             <li class="breadcrumb-item active">Category </li>
           </ol>
         </div>
       </div>
     </div>
 </div> --}}


 <div class="container">
 @if (count($errors)>0)
         <div class="alert alert-danger">
             <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
     @endif
 </div>


 <div class="container">
 <div class="card card-primary">

     <div class="card-header">

       <h3 class="card-title">Category Edit Form</h3>
     </div>

     <!-- /.card-header -->
     <!-- form start -->
     <form action="{{Route('categories.update',$category->id)}}" method="POST">
         @csrf
       <div class="card-body">
         <div class="form-group">
           <label for="name">Name</label>
           <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{$category->name}}" value="{{old('name')}}" >
         </div>

           <div class="form-group">
             <label for="title">Status</label>
             <select name="status" select id="status" class="form-control" >
                 <option value="" class="option_color">Select Status</option>
                 <option value="1" @if($category->status == '1') selected='selected'@endif>Active</option>
                 <option value="0" @if($category->status == '0') selected='selected'@endif>Deactive</option>
             </select>
           </div>

       </div>
       <!-- /.card-body -->

       <div class="card-footer">
         <button type="submit" class="btn btn-primary">Update</button>
       </div>
     </form>
     <div class="card-footer">
         <a href="{{route('table')}}"><button type="submit" class="btn btn-primary">Back</button></a>
       </div>
   </div>
 </div>

   @endsection
