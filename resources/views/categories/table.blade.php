@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{{ session()->get('message') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
            </div>
        @endif
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Table</h3>
             <div class="card-tools">
              <a href="{{('categories/create')}}"><button class="btn btn-primary">add data</button></a>



                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">

                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($category as $cat)
                    <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->name}}</td>
                    <td>@if ($cat->status ==1)
                        <span class="badge badge-primary">Active</span>
                        @else
                        <span class="badge badge-danger">deactive</span>
                        @endif
                     </td>

                     <td><a href="{{Route('categories.edit',$cat->id)}}"><button class="btn btn-success">EDIT</button></a>
                        <a href="{{Route('delete',$cat->id)}}"><button class="btn btn-danger">REMOVE</button></a></td>
                  </tr>
                  @endforeach

                </tbody>


              </table>
              {{$category->links()}}

            </div>

            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
</div>
@endsection
