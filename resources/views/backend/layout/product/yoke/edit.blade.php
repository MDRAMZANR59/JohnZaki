@extends('backend.app')
@section('title')
Yoke Edit
@endsection
@section('content')
<div class="container mt-5">
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white text-center">
            <h3>Yoke Edit</h3>
        </div><button class="btn btn-info float-start">
            <a href="{{ route('yoke.list') }}" class="text-white text-decoration-none">Back To Home</a>
        </button>
        <div class="card-body">
            <form action="{{ route('yoke.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Yoke Name</label>
                    <input yoke="text" id="title" placeholder="Enter Yoke Name" name="title"
                        class="form-control" value="{{$data->title}}" />
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Photo</label>
                    <input type="file" id="image" name="image" class="form-control" />
                    <img style="width: 100px; height:100px; object-fit:contain" src="{{asset('backend/img/'.$data->image)}}" />
                    @error('image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Centered and Block Button -->
                <button yoke="submit" class="btn btn-success btn-lg d-block mx-auto mt-4">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
