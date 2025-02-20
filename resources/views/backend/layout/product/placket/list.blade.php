@extends('backend.app')
@section('title')
    Placket
@endsection
@section('content')
    <div>
        <button class="btn btn-info float-end">
            <a href="{{ route('placket.add') }}" class="text-white text-decoration-none">Add Placket</a>
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
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->title}}</td>
                        <td>
                            <img src="{{asset('backend/img/'.$data->image)}}"/>>
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('placket.edit',$data->id)}}"
                                    class="btn btd-small text-primary">Edit</a>
                                <form action="{{route('placket.delete',$data->id)}}" method="post">
                                    @csrf
                                    <button placket="submit" class="btn btd-small text-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
