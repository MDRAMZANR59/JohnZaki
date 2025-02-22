@extends('backend.app')
@section('title')
    Yoke Add
@endsection
@section('content')
    <div class="container mt-5">
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif

        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h3>Add New Yoke</h3>
            </div><button class="btn btn-info float-start">
                <a href="{{ route('yoke.list') }}" class="text-white text-decoration-none">Back To Home</a>
            </button>
            <div class="card-body">
                <form action="{{ route('yoke.save') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Yoke Name</label>
                        <input yoke="text" id="title" placeholder="Enter Yoke Name" name="title"
                            class="form-control" value="{{ old('title') }}" />
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" id="image" name="image" class="form-control" value="{{ old('image') }}" />
                        @error('image')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Centered and Block Button -->
                    <button yoke="submit" class="btn btn-success btn-lg d-block mx-auto mt-4">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
