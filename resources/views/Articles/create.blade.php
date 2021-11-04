@extends('layouts.app')
@section('content')

<div class="container">
    <form class="row" action=" {{ route('blogs.store') }} " method="post">
        @csrf
        <div class="col-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="">Tiêu đề</label>
                <input type="text" class="form-control form-control-sm @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
                
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
               
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="">Nội dung</label>
                <textarea class="form-control form-control-sm @error('content') is-invalid @enderror"  name="content" id="">{{old('content')}}</textarea>
             
                @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12">
            <div class="from-group">
                <label for="">Ghi chú</label>
                <input type="text" name="note" class="form-control form-control-sm @error('note') is-invalid @enderror">
                @error('note')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12">
            <div class="form-group text-right">
                <a href="{{url('blogs')}}">
                    <i class="fa fa-fw fa-backward"></i> Trở về
                </a>
                <button class="btn btn-sm btn-primary">
                    <i class="fa fa-fw fa-save"></i> Lưu
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
