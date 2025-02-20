@extends('backend.app')
@section('title')
    Product List
@endsection
@section('content')
    <div>
        <button class="btn btn-info float-end">
            <a href="{{ route('product.add') }}" class="text-white text-decoration-none">Add Product</a>
        </button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Sl</td>
                    <td>Name</td>
                    <td>images</td>
                    <td>Reviwe</td>
                    <td>Color Varient</td>
                    <td>Type</td>
                    <td>Size</td>
                    <td>gender</td>
                    <td>febric</td>
                    <td>Plaket</td>
                    <td>Collar</td>
                    <td>Front Pleat</td>
                    <td>Cuff</td>
                    <td>Yoke</td>
                    <td>Chest Pocket</td>
                    <td>Side Pocket</td>
                    <td>Pen Pocket</td>
                    <td>Fit Type</td>
                    <td>Slave Type</td>
                    <td>Button</td>
                    <td>Back Pleat</td>
                    <td>Old Price</td>
                    <td>New Price</td>
                    <td>Tailor Price</td>
                    <td>Age Group</td>
                    <td>Stock</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($datas as $data) --}}
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="d-flex">
                                <a href=""
                                    class="btn btd-small text-primary">Edit</a>
                                <form action="">
                                    @csrf
                                    <button type="submit" class="btn btd-small text-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
        {{-- {{ $datas->links() }} --}}
    </div>
@endsection
