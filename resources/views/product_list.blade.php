@extends('layout.master')

@section('page_title', 'homepage')

@section('content')
    <h1>This is the Product List </h1>
    <a href="{{route('products.create')}}" class="btn btn-primary mb-2">Add Product</a>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Availability</th>
      <th scope="col">Category</th>

      <th scope="col"colspan="2">Edit</th>
      <th scope="col"colspan="2">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $product)
    <tr>
      <td>{{$product['product_name']}}</td>
      <td>{{$product['price']}}</td>
      @if($product['availability'] == 1)
      <td>Available</td>
      @else
      <td>Not Available</td>
      @endif
  @foreach($categories as $category)
      @if($category['id'] == $product['category_id'])
      <td>{{$category['category_name']}}</td>
      @else
      <td>category</td>
      @endif
  @endforeach
      <td><a href="{{route('products.edit',$product['id'])}}" class="btn btn-warning">Edit</a><td>
      <form method="post" action="{{route('products.destroy', $product['id'])}}">
        @csrf
        @method("DELETE")
      <td><button type="submit" class="btn btn-danger">Delete</button><td>
      </form>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection



