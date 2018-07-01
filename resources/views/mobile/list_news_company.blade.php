@extends('layout')
@section('title')
    Tin Doanh Nghiệp
@endsection
@section('content')
    <div class="col-xs-12" style="padding-bottom: 15px">
        <h4 style="border-bottom: 1px solid #dff0d8; padding-bottom: 10px; padding-top: 10px"><a href="/">Trang Chủ</a>
            >Tin Doanh Nghiệp</h4>
        @foreach($newsCompany as $value)
            <div class="mobile-title">
                <div class="col-xs-12" style="margin-bottom: 5px; margin-top: 5px; padding: 0px">
                    <div class="row col-xs-4">
                        <a href="{{route('detail_news_company', ['title' => str_slug($value['title'], '-'),'id' => $value['id']])}}">
                            <img src="/upload/{{$value['image']}}" style="width: 100%; height:70px">
                        </a>
                    </div>
                    <div class="col-xs-8" style="padding-right: 0px">
                        <a href="{{route('detail_news_company', ['title' => str_slug($value['title'], '-'),'id' => $value['id']])}}">
                            {{$value['title']}}
                        </a><br>
                        <span class="glyphicon glyphicon-calendar" style="font-size: 12px">{{date_format(date_create($value['created_at']), 'd-m-Y')}}
                            </span>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="col-xs-12" style="text-align: center">
        {{$newsCompany->render()}}
    </div>
@endsection