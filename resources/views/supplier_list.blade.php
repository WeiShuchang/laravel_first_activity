@extends('layout.master')

@section('page_title', 'homepage')

@section('content')
    <h1>This is the Supplier List </h1>
    <a href="{{route('suppliers.create')}}" class="btn btn-primary mb-2">Add Supplier</a>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Location</th>
      <th scope="col"colspan="1">Edit</th>
      <th scope="col"colspan="1">Delete</th>
      

    </tr>
  </thead>
  <tbody>
  @foreach($suppliers as $supplier)
    <tr>
      <td>{{$supplier['supplier_name']}}</td>
      <td>{{$supplier['supplier_location']}}</td>
        <td>
            <a href="{{route('suppliers.edit', $supplier['id'])}}" class="btn btn-primary">Edit</a>
        </td> 
        <td><form method="post" action="{{route('suppliers.destroy', $supplier['id'])}}">
              @csrf
              @method("DELETE")
            <button type="submit" class="btn btn-danger">Delete</button>
            </form></td>
    </tr>
@endforeach 
  </tbody>
</table>
@endsection



