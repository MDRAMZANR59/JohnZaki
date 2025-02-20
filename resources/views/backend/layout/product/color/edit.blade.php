@extends('backend.app')
@section('title')
Fabric Edit
@endsection
@section('content')
<div class="container mt-5">
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white text-center">
            <h3>Add New Fabric</h3>
        </div><button class="btn btn-info float-start">
            <a href="{{ route('fabric.list') }}" class="text-white text-decoration-none">Back To Home</a>
        </button>
        <div class="card-body">
            <form action="{{ route('fabric.update',$data->id) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Fabric Name</label>
                    <input type="text" id="title" placeholder="Enter Fabric Name" name="title"
                        class="form-control" value="{{$data->title}}" />
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="fabric" class="form-label">Fabric Image</label>
                        <input type="fabric" name="fabric" id="fabric" value="{{$data->fabric}}">
                    @error('fabric')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Centered and Block Button -->
                <button type="submit" class="btn btn-success btn-lg d-block mx-auto mt-4">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
