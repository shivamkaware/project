@extends('layouts.master')
@section('content')
<div class="container">
<h2>fill information</h2>

<form action="{{Route('store')}}" method="POST">
@csrf
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
<form>
<div class="card-body">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter name" value="{{old('name')}}" required>
  </div>

  <div class="card-body">
    <div class="form-group">
      <label for="exampleInputEmail1">Status</label>
      <select name="status" class="form-control" required value="{{old('status')}}" >
      <option value="" class="option_color">select status</option>
      <option value="1">Active</option>
      <option value="0">Deactive</option>
      </select>


<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>

</div>
</form>

</div>
</div>
</div><p align=" right">
    <a href="{{route('table')}}"></a> <button class="btn btn-primary">Back</button>
     </p>

@endsection

