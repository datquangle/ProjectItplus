@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-0">Danh sach san phan</h5>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Danh muc</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Function</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th scope="row">{{$product->id}}</th>
                            <td>{{$product->id_category}}</td>
                            <td>{{$product->name}}</td>
                            <td><img width="200px" src="{{ asset($product->img) }}"></td>
                            <td>{{$product->description }}</td>
                            <td>{{$product->price }}</td>

                            <td>
                                <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-success">Sua</a>

                                <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-success">
                                        <i >Xoa</i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer clearfix">
        {{ $products->links('pagination.custom') }}
    </div>
@endsection
