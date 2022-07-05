<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body><center>


<div class="container">
  <h2>Table</h2>
  @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
  <p style="text-align: left"><a href="{{('blog.form')}}"><button class="btn btn-success">add data</button></a></p>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sr no.</th>
        <th>title</th>
        <th>description</th>
        <th>status</th>
        
        <th>action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($shiv as $shiv )
        {{-- <tr>
            <td>{{$shiv->id}}</td>
            <td>{{$shiv->title}}</td>
            <td>{{$shiv->description}}</td>
            <td><a href="{{Route('edit',$shiv->id)}}"><button class="btn btn-success">EDIT</button></a>
                <a href="{{Route('delete',$shiv->id)}}"><button class="btn btn-danger">REMOVE</button></a></td>
          </tr> --}}

        @endforeach



    </tbody>
  </table>
</div>
<center>
</body>
</html>
</x-app-layout>
