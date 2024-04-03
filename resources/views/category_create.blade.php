@extends('layout.master')

@section('page_title', 'homepage')

@section('content')
    <h1>This is the Add Category Page</h1>
<form method="post" action="{{route('categories.store')}}">
    @csrf
  <div class="form-group">
    <label for="category_name">Category Name</label>
    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category Name">
  </div>
  <div class="form-group">
    <label for="category_description">Category Description</label>
    <input type="category_description" name="category_description" class="form-control" id="exampleInputPassword1" placeholder="Enter Category Description">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection



