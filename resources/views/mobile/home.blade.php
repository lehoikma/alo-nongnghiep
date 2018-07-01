@extends('layout')
@section('title')
    Trang Chủ
@endsection
@section('content')
    <div class="col-xs-12" style=" padding: 0px">
        <div class="col-xs-5" style="padding: 0px; padding-right: 2px">
            <a href="{{route('list-category-product')}}">
                <img src="/image/1.jpg" style="width: 100%; height: 100px; border-radius: 5px">
            </a>
        </div>
        <div class="col-xs-7" style="padding: 0px; padding-left: 2px">
            <a href="{{route('list_news_company_mobile')}}">
                <img src="/image/2.jpg" style="width: 100%; height: 100px; border-radius: 5px">
            </a>
        </div>
    </div>
    <div class="col-xs-12" style="text-align: center; padding: 0px; padding-top: 4px; padding-bottom: 4px">
        <a href="{{route('list_news_farm_mobile')}}">
            <img src="/image/3.jpg" style="width: 100%; height: 120px; border-radius: 5px">
        </a>
        <!-- Tin Nông Nghiệp -->
    </div>
    <div class="col-xs-12" style="padding: 0px">
        <div class="col-xs-6" style="padding: 0px; padding-right: 2px">
            <a href="{{route('question')}}">
                <img src="/image/4.jpg" style="width: 100%; height: 170px; border-radius: 5px">
            </a>
        </div>
        <div class="col-xs-6" style="padding: 0px; height: 170px; padding-left: 2px; ">
            <div class="col-xs-12" style="padding: 0px; padding-bottom: 2px">
                <a href="{{route('list_image_mobile')}}">
                    <img src="/image/5.jpg" style="width: 100%; height: 85px; border-radius: 5px">
                </a>
            </div>
            <div class="col-xs-12" style=" padding: 0px; padding-top: 2px">
                <a href="{{route('list_video_mobile')}}">
                    <img src="/image/6.jpg" style="width: 100%; height: 81px; border-radius: 5px">
                </a>
            </div>
        </div>
    </div>
@endsection