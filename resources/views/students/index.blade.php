@extends('layouts.app')

@section('title', 'Students Page')

@section('content')
    <div class="container">
        <h5 class="text-center py-2">Students Page</h5>
        <a href="{{ route('students.create') }}" class="btn btn-success btn-sm">Create Student</a>
        <div class="row">
            <div class="col-md-8 m-auto">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nume</th>
                            <th scope="col">Prenume</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($students as $student)
                        <tr>
                            <th scope="row">{{ $student->id }}</th>
                            <td>{{ $student->nume }}</td>
                            <td>{{ $student->prenume }}</td>
                            <td>
                                <a href="{{ route('students.show', ['student'=>Str::slug($student->nume, '-')]) }}"
                                   class="btn btn-info btn-sm">View</a>
                                <a href="" class="btn btn-warning btn-sm">Edit</a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @empty
                            <p>No students</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
