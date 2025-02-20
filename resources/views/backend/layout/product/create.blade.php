@extends('backend.app')
@section('title')
Product Add
@endsection
@section('content')
<form action="" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="container mt-5">
        <h3>Add New Product</h3>

        <!-- Product Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Product Images -->
        <div class="mb-3">
            <label for="images" class="form-label">Images</label>
            <input type="file" class="form-control @error('images') is-invalid @enderror" id="images" name="images[]" multiple>
            @error('images')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Color Variant -->
        <div class="mb-3">
            <label for="color_variant" class="form-label">Color Variant</label>
            <input type="text" class="form-control @error('color_variant') is-invalid @enderror" id="color_variant" name="color_variant" value="{{ old('color_variant') }}">
            @error('color_variant')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Type -->
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type') }}">
            @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Size -->
        <div class="mb-3">
            <label for="size" class="form-label">Size</label>
            <select class="form-select @error('size') is-invalid @enderror" id="size" name="size">
                <option value="">Select Size</option>
                <option value="S" {{ old('size') == 'S' ? 'selected' : '' }}>S</option>
                <option value="M" {{ old('size') == 'M' ? 'selected' : '' }}>M</option>
                <option value="L" {{ old('size') == 'L' ? 'selected' : '' }}>L</option>
                <option value="XL" {{ old('size') == 'XL' ? 'selected' : '' }}>XL</option>
            </select>
            @error('size')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Gender -->
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select @error('gender') is-invalid @enderror" id="gender" name="gender">
                <option value="">Select Gender</option>
                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
            </select>
            @error('gender')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Fabric -->
        <div class="mb-3">
            <label for="fabric" class="form-label">Fabric</label>
            <input type="text" class="form-control @error('fabric') is-invalid @enderror" id="fabric" name="fabric" value="{{ old('fabric') }}">
            @error('fabric')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Price Details -->
        <div class="mb-3">
            <label for="old_price" class="form-label">Old Price</label>
            <input type="number" class="form-control @error('old_price') is-invalid @enderror" id="old_price" name="old_price" value="{{ old('old_price') }}" step="0.01" required>
            @error('old_price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="new_price" class="form-label">New Price</label>
            <input type="number" class="form-control @error('new_price') is-invalid @enderror" id="new_price" name="new_price" value="{{ old('new_price') }}" step="0.01" required>
            @error('new_price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tailor_price" class="form-label">Tailor Price</label>
            <input type="number" class="form-control @error('tailor_price') is-invalid @enderror" id="tailor_price" name="tailor_price" value="{{ old('tailor_price') }}" step="0.01" required>
            @error('tailor_price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Stock -->
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="{{ old('stock') }}" required>
            @error('stock')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Add Product</button>
    </div>
</form>

@endsection
