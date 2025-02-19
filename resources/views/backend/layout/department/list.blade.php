@extends('backend.app')
@section('title')
    Department
@endsection
@section('content')
    <div>
        <button class="btn btn-info float-end">
            <a href="{{ route('addDepartment') }}" class="text-white text-decoration-none">Add Department</a>
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
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->title }}</td>
                        <td><img class="img-fluid" style="width: 100px; Height:100px; object-fit: contain;" src="{{asset('backend/img/'.$data->image)}}" alt="No Image" />
                        </td>
                        <td>
                            <a href="{{route('department.edit',$data->id)}}" class="btn btd-small text-primary">Edit</a>
                            <a href="" class="btn btd-small text-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$datas->links()}}
    </div>
@endsection
