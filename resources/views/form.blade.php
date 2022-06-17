<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
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
    <div class="form-group">
      <label for="title">title</label>
      <input type="text" class="form-control" placeholder="enter title" name="title"  value="{{old('title')}}" required>
    </div>
    <label for="description">description</label><br>
    <textarea type="text" placeholder="Enter description" name="description" rows="4" cols="50" required>{{old('description')}} </textarea>
   <br>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</body>
</html>
</x-app-layout>

