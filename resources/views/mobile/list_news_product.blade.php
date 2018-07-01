@extends('layout')
@section('title')
    Sản Phẩm
@endsection
@section('content')
    <div class="col-xs-12" style="padding-bottom: 15px">
        <h4 style="border-bottom: 1px solid #dff0d8; padding-bottom: 10px; padding-top: 10px"><a href="/">Trang Chủ</a> > Sản Phẩm</h4>

        <div class="mobile-category-product" style="padding-bottom: 15px">
            <strong style="font-size: 18px; color: #8ecd6c">
                Danh Mục : {{$nameCategory['name']}}
            </strong>
        </div>
        @if(count($products) == 0)
            <div class="mobile-title">
                <p style="text-align: center; font-size: 18px">Không có sản phẩm nào</p>
            </div>
        @endif
        <div class="mobile-title">
            @foreach($products as $prd)
                <div class="col-xs-12" style="margin-bottom: 5px; margin-top: 5px">
                    <div class="row col-xs-4">
                        <a href="{{route('detail_news_products', ['title' => str_slug($prd['title'], '-'),'id' => $prd['id']])}}">
                        <img src="/upload/{{$prd['image']}}" style="width: 100%">
                        </a>
                    </div>
                    <div class="col-xs-8">
                        <a href="{{route('detail_news_products', ['title' => str_slug($prd['title'], '-'),'id' => $prd['id']])}}">
                            {{$prd['title']}}
                        </a><br>
                        <span class="glyphicon glyphicon-calendar" style="font-size: 12px">{{date_format(date_create($prd['created_at']), 'd-m-Y')}}
                                </span>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection