@extends('layout.master')

@section('page_title', 'homepage')

@section('content')
    <h1>This is the Category List </h1>
    <a href="{{route('categories.create')}}" class="btn btn-primary mb-2">Add Category</a>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col"colspan="1">Edit</th>
      <th scope="col"colspan="1">Delete</th>
      

    </tr>
  </thead>
  <tbody>
  @foreach($categories as $category)
    <tr>
      <td>{{$category['category_name']}}</td>
      <td>{{$category['category_description']}}</td>
        <td>
            <a href="{{route('categories.edit',$category['id'])}}" class="btn btn-primary">Edit</a>

        </td> 
        <td><form method="post" action="{{route('categories.destroy',$category['id'])}}">
              @csrf
              @method("DELETE")
            <button type="submit" class="btn btn-danger">Delete</button>
            </form></td>
    </tr>
@endforeach 
  </tbody>
</table>
@endsection



