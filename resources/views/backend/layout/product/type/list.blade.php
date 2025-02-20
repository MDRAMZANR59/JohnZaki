@extends('backend.app')
@section('title')
    Type
@endsection
@section('content')
    <div>
        <button class="btn btn-info float-end">
            <a href="{{ route('type.add') }}" class="text-white text-decoration-none">Add Type</a>
        </button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Sl</td>
                    <td>Name</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->title}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('type.edit',$data->id)}}"
                                    class="btn btd-small text-primary">Edit</a>
                                <form action="{{route('type.delete',$data->id)}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btd-small text-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
