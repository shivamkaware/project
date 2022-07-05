 @extends('layouts.master')
@section('content')


{{-- <div class="container">
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
              <h1 class="card-title">Data table</h1>
              <div class="card-tools">
             <a href="{{route('create')}}"><button class="btn btn-primary">add data</button></a>
               </div>
              </div>
            </div>
            {{$product->links()}}
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">

                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>description</th>
                    <th>category</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($product as $product )
                    <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{@$product->category->name}}</td>
                    <td>@if ($product->status ==1)
                        <span class="badge badge-primary">Active</span>
                        @else
                        <span class="badge badge-danger">deactive</span>
                        @endif
                     </td>

                    <td><a href="{{Route('blog.edit',$product->id)}}"><button class="btn btn-success">EDIT</button></a>
                        <a href="{{Route('blog.delete',$product->id)}}"><button class="btn btn-danger">REMOVE</button></a></td>
                  </tr>
                  @endforeach

                </tbody>

              </table>



            </div>

            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
      </div>
</div> --}}
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
          <h3 class="card-title">Table Data</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <a href="{{route('create')}}"><button class="btn btn-primary">Add data</button></a>

              <div class="input-group-append">

              </div>
            </div>
          </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                {{$product->links()}}
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>description</th>
                    <th>category</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($product as $product )
                    <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{@$product->category->name}}</td>
                    <td>@if ($product->status ==1)
                        <span class="badge badge-primary">Active</span>
                        @else
                        <span class="badge badge-danger">deactive</span>
                        @endif
                     </td>
                     <td>
                        @if (empty($product->image))
                        <img src="{{asset('downlod1.jpg')}}" width="100px" height="100px">
                        @else
                        <img src="{{asset('uploads_image/'.$product->image)}}" width="100px" height="100px">
                        @endif
                     </td>

                    <td><a href="{{Route('blog.edit',$product->id)}}"><button class="btn btn-success">EDIT</button></a>
                        <a href="{{Route('blog.delete',$product->id)}}"><button class="btn btn-danger">REMOVE</button></a></td>
                  </tr>
                  @endforeach

                </tbody>
            </table>

        </div>
       <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>

  </div>
</div>


@endsection
