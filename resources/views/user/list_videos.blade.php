@extends('user.layouts.app')
@section('title')
    Danh Sách Video
@endsection
@section('content')
    <div id="vmag-breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#" style="margin-top: 15px">
        <span typeof="v:Breadcrumb">
            <a rel="v:url" property="v:title" href="{{route('home')}}">Trang chủ</a>
        </span> &gt;
        <span class="current">Videos</span>
    </div>
    <header class="page-header1" style="padding-bottom: 9px;
    margin: 20px 0 20px;
    border-bottom: 1px solid #eee;">
        <h1 class="page-title" style="font-weight: 400; color: #38A63A">Videos</h1>
    </header>
    @foreach($videos as $video)
        <a href="{{route('detail_video', $video['id'])}}">
            <h4>{{$video['name']}}</h4>
        </a>
        <div class="videos-custom" style="margin-bottom: 20px">
            {!! $video['videos'] !!}
        </div>
    @endforeach
    <div style="text-align: center">
        {{$videos->render()}}
    </div>
@endsection