@extends('layout.master')

@section('page_title', 'sanchez_course')

@section('content')

<h1>This is the Sanchez_Course View</h1>

<table>
    @foreach($courses as $course)
    <tr>
        <td>{{$course['course_code']}}</td>
        <td>{{$course['course_description']}}</td>
        <td>{{$course['units']}}</td>
    </tr>
    @endforeach
</table>


@endsection
