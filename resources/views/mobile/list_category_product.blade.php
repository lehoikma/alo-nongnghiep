@extends('layout')
@section('title')
    Sản Phẩm
@endsection
@section('content')
    <div class="col-xs-12" style="padding-bottom: 15px">
        <h4 style="border-bottom: 1px solid #dff0d8; padding-bottom: 10px; padding-top: 10px">
            <a href="/">Trang Chủ</a>
            > Sản Phẩm</h4>
        @foreach($category as $k=>$ct)

            @if($k % 4 == 0)
                <div class="mobile-category-product" style="margin-bottom: 10px;background: #c7f3b0;padding: 10px;padding-left: 3px;border-radius: 8px;">
            @elseif($k % 4 == 1)
                        <div class="mobile-category-product" style="margin-bottom: 10px;background: #fbe3e3;padding: 10px;padding-left: 3px;border-radius: 8px;">
            @elseif($k % 4 == 2)
                                <div class="mobile-category-product" style="margin-bottom: 10px;background: #dcdcff;padding: 10px;padding-left: 3px;border-radius: 8px;">
            @elseif($k % 4 == 3)
                                        <div class="mobile-category-product" style="margin-bottom: 10px;background: #f7c8d4;padding: 10px;padding-left: 3px;border-radius: 8px;">
            @endif
                <span class="glyphicon glyphicon-grain"></span>

                <a href="{{route('list_news_products_category', $ct['id'])}}">
                    <strong style="font-size: 18px;     text-transform: uppercase;">
                         {{$ct['name']}}
                    </strong>
                </a>
            </div>
        @endforeach
    </div>
@endsection