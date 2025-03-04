@extends('backend.app')
@section('title')
    Department
@endsection
@section('content')
    <div>
        <button class="btn btn-info float-end">
            <a href="{{ route('department.add') }}" class="text-white text-decoration-none">Add Department</a>
        </button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Sl</td>
                    <td>Name</td>
                    <td>Image</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $loop->iteration  }}</td>
                        <td>{{ $data->title }}</td>
                        <td><img class="img-fluid" style="width: 100px; Height:100px; object-fit: contain;"
                                src="{{ asset('backend/img/' . $data->image) }}" alt="No Image" />
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('department.edit', $data->id) }}"
                                    class="btn btd-small text-primary">Edit</a>
                                <form action="{{ route('department.delete', $data->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btd-small text-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $datas->links() }}
    </div>
@endsection
