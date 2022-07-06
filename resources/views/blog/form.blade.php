 {{-- @extends('layouts.master')
@section('content')

<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Blogs</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-rigth">
          <li class="breadcrumb-item "><a href="#">HOME</a></li>
          <li class="breadcrumb-item active">BLOG</li>
        </ol>
      </div>
    </div>
  </div>
</div>


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
<div class="card card-primary">
<div class="card-header">
  <h3 class="card-title">Form</h3>
</div>
<!-- /.card-header -->
<!-- form start -->
 <h2>fill information</h2>
<form action="{{Route('stored')}}" method="POST" enctype="multipart/form-data">
@csrf

<div class="card-body">

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control"  placeholder="Enter title" value="{{old('title')}}"  required>
  </div>

  <div class="form-group">
    <label for="textarea">Description</label>
   <textarea name="description"  class="form-control" id="body"  cols="30" rows="5"  required>{{old('description')}}</textarea>
  </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Status</label>
      <select name="status" class="form-control" required  >
      <option value="" class="option_color">select status</option>
      <option value="1">Active</option>
      <option value="0">Deactive</option>
      </select>
     </div>

     <div class="form-group">
          <label for="exampleInputEmail1">select category</label>
          <select name="category_id"  select id="category_id" class="form-control" required >
            @foreach ($categories as $c )
            <option value="{{$c->id}}">{{$c->name}}</option>

             @endforeach
        </select>
     </div>

     <div class="form-group">
            <label for="profile image">Profile image</label>
            <input type="file" name="image"  id="image" class="form-control"  placeholder="Uplode Profile image">
     </div>
</div>
<!-- /.card-body -->

     <div class="card-foter">
         <button type="submit" class="btn btn-primary" value="submit">Submit</button>
     </div>
    </form>
    <br>
      <div class="card-foter">
    <a href="{{route('blog.table')}}"></a> <button class="btn btn-primary">Back</button>

     </div>
   </div>
 </div>
<script>
    ClassicEditor
    .create( document.querySelector( '#body' ) )
    .catch( error => {
    console.error( error );
    } );
    </script>
@endsection
 --}}
 @extends('layouts.master')
 @section('content')

 <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

 {{-- <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0">Blogs</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
             <li class="breadcrumb-item active">Blogs </li>
           </ol>
         </div><!-- /.col -->
       </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div> --}}



 <div class="container">
     @if (count($errors) > 0)
       <div class="alert alert-danger">
         <ul>
             @foreach($errors->all() as $error)
             <li>{{$error}}</li>
             @endforeach
         </ul>
       </div>
       @endif
 <div class="card card-primary">
     <div class="card-header">
       <h3 class="card-title">Add Data</h3>
     </div>
     <!-- /.card-header -->
     <!-- form start -->
     <form action="{{Route('stored')}}" method="POST" enctype="multipart/form-data">
         @csrf
       <div class="card-body">

         <div class="form-group">
             <label for="text">Title:</label>
             <input type="text" class="form-control" id="text" aria-describedby="emailHelp" placeholder="Enter text" name="title" value="{{old('title')}}" required>
           </div>

           <div class="form-group">
             <label for="description">description:</label> <br>
             <textarea name="description" id="body" cols="100" class="form-control" rows="10" placeholder="Enter your query"  required>{{old('description')}} </textarea>
           </div>

           <div class="form-group">
            <label for="exampleInputEmail1">select category</label>
            <select name="category_id"  select id="category_id" class="form-control"  >
              @foreach ($categories as $c )
              <option value="{{$c->id}}">{{$c->name}}</option>

               @endforeach
          </select>
       </div>

           <div class="form-group">
             <label for="status">Status</label>
             <select name="status" select id="status" class="form-control" >
                 <option value="{{old('status')}}" class="option_color">Select Status</option>
                 <option value="1">Active</option>
                 <option value="0">Deactive</option>
             </select>
           </div>

           <div class="form-group">
             <label for="image"> Image</label>
             <input type="file" class="form-control" name="image" placeholder="upload profile image" required>
           </div>

       </div>
       <!-- /.card-body -->

       <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button>
       </div>
     </form>
    <div class="card-footer">
     <a href="{{route('blog.table')}}"><button type="submit" class="btn btn-primary">back</button></a>
 </div>
   </div>
 </div>
 <script>
     ClassicEditor
     .create( document.querySelector( '#body' ) )
     .catch( error => {
     console.error( error );
     } );
     </script>
 @endsection
