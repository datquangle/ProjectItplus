@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-0">Danh sach danh muc</h5>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Name</th>
                        {{-- <th scope="col">Image</th> --}}
                        <th scope="col">Description</th>
                        <th scope="col">Function</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->name}}</td>
                        {{-- <td><img width="200px" src="{{ asset($category->img) }}"></td> --}}
                        <td>{{$category->description}}</td>
                        <td>
                            <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-success">Sua</a>

                            <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-success">
                                    <i >Xoa</i>
                                </button>
                            </form>
                            <a href="{{ route('admin.category.cart', "$category->slug") }}">XEM</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="card-footer clearfix">
                    {{ $categories->links('pagination.custom') }}
                </div>

            </div>

        </div>
        </div>



@endsection
