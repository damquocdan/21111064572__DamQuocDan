@extends('layouts.app')

@section('content')
    <h1>Create Category</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Category Name:</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Save</button>
    </form>
@endsection
