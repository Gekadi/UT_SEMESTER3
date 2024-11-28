
@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Edit Category: {{ $category->name }}</h1>

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('categories.update', $category->id) }}">
        @csrf
        @method('PUT') <!-- This specifies that this is a PUT request for updating -->
        
        <div class="form-group">
            <label for="nama">Category Name</label>
            <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama', $category->nama) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update Category</button>
    </form>
</div>
@endsection
