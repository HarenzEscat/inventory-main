@extends('layout.app')

@section('title', 'Student List')

@section('content')
<div class="container mt-5">
    <h1>Student List</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add Student</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Section</th>
                <th>Course</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->section->name }}</td>
                <td>{{ $student->course->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
