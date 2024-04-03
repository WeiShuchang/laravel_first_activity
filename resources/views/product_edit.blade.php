@extends('layout.master')

@section('page_title', 'homepage')

@section('content')
    <h1>This is the Edit Page</h1>
<form method="post" action="{{route('products.update', $product['id'])}}">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="product_name">Product Name</label>
    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$product['product_name']}}">
  </div>
  <div class="form-group">
    <label for="price">Product Price</label>
    <input type="number" name="price" class="form-control" id="exampleInputPassword1"  value="{{$product['price']}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Availability</label>
    <select class="form-select" name="availability" id="">
        @if ($product['availability'] == 1)
        <option value="1" selected>Available</option>
        <option value="0">Not Available</option>
        @else
        <option value="1" >Available</option>
        <option value="0" selected>Not Available</option>
        @endif
    </select>
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
    <label for="exampleInputPassword1">Product Type</label>
    <select class="form-select" name="product_type" id="">
    @if ($product['product_type'] == 'bread')
        <option value="bread" selected>bread</option>
        <option value="beverage">beverage</option>
    @else
        <option value="bread" >bread</option>
        <option value="beverage" selected>beverage</option>
    @endif

    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection



