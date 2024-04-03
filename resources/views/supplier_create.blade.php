@extends('layout.master')

@section('page_title', 'homepage')

@section('content')
    <h1>This is the Add Category Page</h1>
<form method="post" action="{{route('suppliers.store')}}">
    @csrf
  <div class="form-group">
    <label for="supplier_name">Supplier Name</label>
    <input type="text" name="supplier_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Supplier Name">
  </div>
  <div class="form-group">
    <label for="supplier_location">Supplier Location</label>
    <input type="supplier_location" name="supplier_location" class="form-control" id="exampleInputPassword1" placeholder="Enter Category Description">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection



