@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
            </div> -->
            <h4>Dashboard</h4>
        </div>
        <div class="col-12 col-sm-12 col-md-12">
            <a class="btn btn-sm btn-success" href="{{ url('blogs') }}">Trang blog</a>
        </div>
    </div>
</div>
@endsection
