@extends('master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-0">Danh sach tai khoan</h5>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">STT</th>
                        {{-- <th scope="col">Name</th> --}}
                        <th scope="col">UserName</th>
                        <th scope="col">Email</th>
{{--                        <th scope="col">Phan quyen</th>--}}
{{--                        <th scope="col">Avatar</th>--}}
                        <th scope="col">Function</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            {{-- <td>{{ $user->name }}</td> --}}
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
{{--                            <td>{{ $user->role }}</td>--}}
{{--                            <td><img width="200px" src="{{ asset($user->img) }}"></td>--}}

                            <td>
                                <a href="{{ route('admin.adminuser.edit', $user->id) }}" class="btn btn-success">Sua</a>
                                <form action="{{ route('admin.adminuser.destroy', $user->id) }}" method="POST">
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
                <div class="card-footer clearfix">
                    {{ $users->links('pagination.custom') }}
                </div>

            </div>

        </div>
    </div>



@endsection
