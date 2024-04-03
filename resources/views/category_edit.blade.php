@extends('layout.master')

@section('page_title', 'homepage')

@section('content')
    <h1>This is the Category Edit Page</h1>
<form method="post" action="{{route('categories.update', $category['id'])}}">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="category_name">Category Name</label>
    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$category['category_name']}}">
  </div>
  <div class="form-group">
    <label for="category_description">Category Description</label>
    <input type="text" name="category_description" class="form-control" id="exampleInputPassword1"  value="{{$category['category_description']}}">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection



