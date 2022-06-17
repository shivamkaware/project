<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="{{Route('update',$shiv->id)}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">title</label>
      <input type="text" class="form-control" placeholder="Enter title" name="title" value="{{$shiv->title}}">
    </div>
    <textarea type="text" placeholder="Enter description" name="description" rows="4" cols="50" >{{($shiv->description)}} </textarea>
<br>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
</x-app-layout>
