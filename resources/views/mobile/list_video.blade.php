@extends('layout')
@section('title')
    Videos
@endsection
@section('content')
    <div class="col-xs-12" style="padding-bottom: 15px">
        <h4 style="border-bottom: 1px solid #dff0d8; padding-bottom: 10px; padding-top: 10px"><a href="/">Trang Chủ</a> > Videos</h4>
        @foreach($videos as $value)
            <div class="mobile-category-product">
                <a href="{{route('detail_video', $value['id'])}}">
                    <strong style="padding-bottom: 10px">
                        {{$value['name']}}
                    </strong>
                </a>
            </div>
            <div class="mobile-title" style="padding-top: 10px; padding-bottom: 10px">
                {!! $value['videos'] !!}
            </div>
        @endforeach
    </div>
    <div class="col-xs-12" style="text-align: center">
        {{$videos->render()}}
    </div>
@endsection