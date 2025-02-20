@extends('backend.app')
@section('title')
    Department
@endsection
@section('content')
    <div>
        <button class="btn btn-info float-end">
            <a href="{{ route('fabric.add') }}" class="text-white text-decoration-none">Add Fabric</a>
        </button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Sl</td>
                    <td>Name</td>
                    <td>Fabric</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->title}}</td>
                        <td style="background-fabric: {{ $data->fabric }}; height: 30px;"></td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('fabric.edit',$data->id)}}"
                                    class="btn btd-small text-primary">Edit</a>
                                <form action="{{route('fabric.delete',$data->id)}}" method="post">
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
