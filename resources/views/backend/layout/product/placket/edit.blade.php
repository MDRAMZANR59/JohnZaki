@extends('backend.app')
@section('title')
Type Edit
@endsection
@section('content')
<div class="container mt-5">
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white text-center">
            <h3>Type Edit</h3>
        </div><button class="btn btn-info float-start">
            <a href="{{ route('type.list') }}" class="text-white text-decoration-none">Back To Home</a>
        </button>
        <div class="card-body">
            <form action="{{ route('type.update',$data->id) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Type Name</label>
                    <input type="text" id="title" placeholder="Enter Type Name" name="title"
                        class="form-control" value="{{$data->title}}" />
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Centered and Block Button -->
                <button type="submit" class="btn btn-success btn-lg d-block mx-auto mt-4">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
