@extends('layout')
@section('title')
    Tin Doanh Nghiệp
@endsection
@section('content')
    <div class="col-xs-12" style="padding-bottom: 15px">
        <h4 style="border-bottom: 1px solid #dff0d8; padding-bottom: 10px; padding-top: 10px"><a href="/">Trang Chủ</a> > Tin Doanh Nghiệp</h4>
        <span class="glyphicon glyphicon-calendar" style="font-size: 12px"></span>
        {{date_format(date_create($news['created_at']), 'd-m-Y H:i:s')}}

        <h4>{{$news['title']}}</h4>
        <div id="mobile-product-content">
            {!! $news['content'] !!}
        </div>
    </div>
    <div class="col-xs-12" style="border-top: 1px solid #dff0d8">
        <h4>
           Cùng Chuyên Mục
        </h4>

        @foreach($newsFollow as $value)
            <div class="col-xs-12" style="margin-bottom: 15px; margin-top: 5px; padding: 0px">
                <div class="row col-xs-4">
                    <a href="{{route('detail_news_company_mobile', $value['id'])}}">
                        <img src="/upload/{{$value['image']}}" style="width: 100%">
                    </a>
                </div>
                <div class="col-xs-8" style="padding-right: 0px">
                    <a href="{{route('detail_news_company_mobile', $value['id'])}}">
                        {{$value['title']}}
                    </a>
                    <br>
                </div>
            </div>
        @endforeach
    </div>
@endsection