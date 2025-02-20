@extends('backend.app')
@section('title')
    Size
@endsection
@section('content')
    <div>
        <button class="btn btn-info float-end">
            <a href="{{ route('size.add') }}" class="text-white text-decoration-none">Add Size</a>
        </button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Sl</td>
                    <td>Name</td>
                    <td>Chest</td>
                    <td>Length</td>
                    <td>Sleeve Length</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><strong>{{$data->sizeName}}</strong></td>
                        <td>{{$data->chest}}</td>
                        <td>{{$data->length}}</td>
                        <td>{{$data->sleeveLength}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('size.edit',$data->id)}}"
                                    class="btn btd-small text-primary">Edit</a>
                                <form action="{{route('size.delete',$data->id)}}" method="post">
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
