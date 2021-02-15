@extends('layouts.app')

@section('title', 'Create Student')

@section('content')
    <div class="container">
        <h5 class="text-center py-2">Create Student</h5>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-4 m-auto">
                <form action="{{ route('students.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nume</label>
                        <input type="text" name="nume" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Prenume</label>
                        <input type="text" name="prenume" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
