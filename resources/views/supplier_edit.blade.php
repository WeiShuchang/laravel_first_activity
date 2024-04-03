@extends('layout.master')

@section('page_title', 'homepage')

@section('content')
    <h1>This is the Supplier Edit Page</h1>
<form method="post" action="{{route('suppliers.update', $supplier['id'])}}">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="supplier_name">Supplier Name</label>
    <input type="text" name="supplier_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$supplier['supplier_name']}}">
  </div>
  <div class="form-group">
    <label for="supplier_location">Category Description</label>
    <input type="text" name="supplier_location" class="form-control" id="exampleInputPassword1"  value="{{$supplier['supplier_location']}}">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection



