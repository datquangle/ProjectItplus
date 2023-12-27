@extends('admin.master')

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
       <form class="form-horizontal" method="POST" action="{{ route('admin.category.update', $category) }}"
       enctype="multipart/form-data">
           @csrf
           @method('PUT')
           <div class="card-body">
               <h4 class="card-title">EDIT</h4>

               <div class="form-group row">
                   <label for="name" class="col-sm-3 text-end control-label col-form-label">Ten danh muc</label>
                   <div class="col-sm-9">
                       <input type="text" class="form-control" id="name" name="name"
                       value="{{$category->name}}">
                   </div>
               </div>

               {{-- <div class="form-group row">
                   <label for="img" class="col-sm-3 text-end control-label col-form-label">Hinh anh</label>
                   <div class="col-sm-9">
                       <input type="file" class="form-control" id="img" name="img">
                   </div>
               </div> --}}

               <div class="form-group row">
                   <label for="description" class="col-sm-3 text-end control-label col-form-label">Mo ta</label>
                   <div class="col-sm-9">
                       <textarea class="form-control" id="description" name="description">{{ $category->description }}</textarea>
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
