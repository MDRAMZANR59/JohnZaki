@extends('backend.app')
@section('title')
    Size Add
@endsection
@section('content')
    <div class="container mt-5">
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif

        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h3>Add New Size</h3>
            </div><button class="btn btn-info float-start">
                <a href="{{ route('size.list') }}" class="text-white text-decoration-none">Back To Home</a>
            </button>
            <div class="card-body">
                <form action="{{ route('size.save') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="sizeName" class="form-label">Size Name</label>
                        <input type="text" id="sizeName" placeholder="Enter Size Name" name="sizeName"
                            class="form-control" value="{{ old('sizeName') }}" />
                        @error('sizeName')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="chest" class="form-label">Chest</label>
                        <input type="text" id="chest" placeholder="Enter Size Name" name="chest"
                            class="form-control" value="{{ old('chest') }}" />
                        @error('chest')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="length" class="form-label">Length</label>
                        <input type="text" id="length" placeholder="Enter Size Name" name="length"
                            class="form-control" value="{{ old('length') }}" />
                        @error('length')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="sleeveLength" class="form-label">Sleeve Length</label>
                        <input type="text" id="sleeveLength" placeholder="Enter Size Name" name="sleeveLength"
                            class="form-control" value="{{ old('sleeveLength') }}" />
                        @error('sleeveLength')
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
