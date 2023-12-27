
@extends('master')

@section('content')
    <div>
        @if($errors = session()->get('errors'))
            <ul>
                @foreach($errors->messages() as $key => $error)
                    <li>
                        {{ $error[0] }}
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    <div class="card">
        <form class="form-horizontal" method="POST" action="{{ route('post.register') }}"
              enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title">Them tai khoan</h4>

                <div class="form-group row">
                    <label for="name" class="col-sm-3 text-end control-label col-form-label">Ten dang nhap</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="username" name="username" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-3 text-end control-label col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" name="email" >
                    </div>
                </div>

{{--                <div class="form-group row">--}}
{{--                    <label for="img" class="col-sm-3 text-end control-label col-form-label">Anh dai dien</label>--}}
{{--                    <div class="col-sm-9">--}}
{{--                        <input type="file" class="form-control" id="img" name="img">--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--                <div class="form-group row">--}}
{{--                    <label for="description" class="col-sm-3 text-end control-label col-form-label">Phan quyen</label>--}}
{{--                    <div class="col-sm-9">--}}
{{--                        <select id="cars" name="role">--}}
{{--                            <option value="Phan quyen cap 1 (chi duoc xem)" >Phan quyen cap 1 (chi duoc xem)</option>--}}
{{--                            <option value="han quyen cap 2 (sua duoc cate va prod)">phan quyen cap 2 (sua duoc cate va prod)</option>--}}
{{--                            <option value="ua dc tat ca">phan quyen cap 3 (sua dc tat ca)</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="form-group row">
                    <label for="password" class="col-sm-3 text-end control-label col-form-label">Mật khẩu</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="confirmation_password" class="col-sm-3 text-end control-label col-form-label">Nhập lại mật khẩu</label>
                    <div class="col-sm-9">
                     <input type="password" class="form-control" id="confirmation_password" name="confirmation_password">
                    </div>
                </div>


            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </div>
            </div>
        </form>
    </div>



@endsection

