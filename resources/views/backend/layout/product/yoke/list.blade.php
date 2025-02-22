@extends('backend.app')
@section('title')
    Yoke
@endsection
@section('content')
    <div>
        <button class="btn btn-info float-end">
            <a href="{{ route('yoke.add') }}" class="text-white text-decoration-none">Add Yoke</a>
        </button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Sl</td>
                    <td>Name</td>
                    <td>Photo</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->title }}</td>
                        <td>
                            <img style="Height:100px; width:100px; object-fit:contain"
                                src="{{ asset('backend/img/' . $data->image) }}" />
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('yoke.edit', $data->id) }}" class="btn btd-small text-primary">Edit</a>
                                <form action="{{ route('yoke.delete', $data->id) }}" method="post">
                                    @csrf
                                    <button yoke="submit" class="btn btd-small text-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
