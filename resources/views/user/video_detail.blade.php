@extends('user.layouts.app')
@section('title')
    Video
@endsection
@section('content')
    <div class="col-xs-12" style="padding-bottom: 15px">
        <h4 style="border-bottom: 1px solid #dff0d8; padding-bottom: 10px; padding-top: 10px">
            <a href="/">Trang Chủ</a>
             > Videos</h4>
        <span class="glyphicon glyphicon-calendar" style="font-size: 12px"></span>
        {{date_format(date_create($video['created_at']), 'd-m-Y H:i:s')}}

        <h4>{{$video['name']}}</h4>
        <div class="mobile-title" style="padding-top: 10px; padding-bottom: 10px">
            {!! $video['videos'] !!}
        </div>
    </div>
@endsection