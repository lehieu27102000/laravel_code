@extends('layouts.app')
@section('content')
<div class="container">
    <form class="row" action="{{url('blogs/update/') .  '/' . $blog->id}}" method="POST">
    <!-- <form class="row" action="{{url('blogs/update', ['blog' => $blog->id])}}" method="POST"> -->
    @csrf
        {{method_field('PUT')}}
        <div class="col-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="">Tiêu đề</label>
                <input type="text" class="form-control form-control-sm @error('title') is-invalid @enderror" name="title" value="{{$blog->title}}">
                
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
                <textarea class="form-control form-control-sm @error('content') is-invalid @enderror"  name="content" id="">{{$blog->content}}</textarea>
             
                @error('content')
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