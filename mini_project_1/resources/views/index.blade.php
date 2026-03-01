@extends('layouts.app')

@section('content')
    <h1>Student List</h1>

    <ul>
        @foreach($students as $student)
            <li>
                <strong>Name:</strong> {{ $student['name'] }} | 
                <strong>Age:</strong> {{ $student['age'] }}
            </li>
        @endforeach
    </ul>
@endsection