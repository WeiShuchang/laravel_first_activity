@extends('layout.master')

@section('page_title', 'homepage')

@section('content')
    <h1>This is the Add page</h1>
<form method="post" action="{{route('products.store')}}">
    @csrf
  <div class="form-group">
    <label for="product_name">Product Name</label>
    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name">
  </div>
  <div class="form-group">
    <label for="price">Product Price</label>
    <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="Price">
  </div>

  <div class="form-group my-3">
  <label for="Category">Category</label>
    <select name="category_id" id="">
        @foreach($categories as $category)
          <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
  </select>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Availability</label>
    <select class="form-select" name="availability" id="">
        <option value="1">Available</option>
        <option value="0">Not Available</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Product Type</label>
    <select class="form-select" name="product_type" id="">
        <option value="bread">bread</option>
        <option value="beverage">beverage</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection



