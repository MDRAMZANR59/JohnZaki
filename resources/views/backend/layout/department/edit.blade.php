@extends('backend.app')
@section('title')
    Edit Department
@endsection

@section('content')
    <div class="container mt-5">
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif

        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h3>Add New Department</h3>
            </div><button class="btn btn-info float-start">
                <a href="{{route('department.list')}}" class="text-white text-decoration-none">Back To Home</a>
            </button>
            <div class="card-body">
                <form action="{{ route('department.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Department Name</label>
                        <input type="text" id="title" placeholder="Enter Department Name" name="title"
                            class="form-control" value="{{ $data->title }}" />
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="departmentImage" class="form-label">Department Image</label>
                        <input type="file" id="departmentImage" name="image" class="form-control"
                            value="{{ $data->image }}" />
                            <img width="100px" src="{{asset('backend/img/'.$data->image)}}" />
                        @error('image')
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
