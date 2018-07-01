@extends('layout')
@section('title')
    Hình Ảnh
@endsection
@section('content')
    <div class="col-xs-12" style="padding-bottom: 15px">
        <h4 style="border-bottom: 1px solid #dff0d8; padding-bottom: 10px; padding-top: 10px">
            <a href="/">Trang Chủ</a>
            >Ảnh Hoạt Động Của Thành Đô</h4>
        @foreach($categoryImage as $category)
        <!--<h4>{{$category['name']}}</h4>-->
            <div class="image" style="text-align:center">
        
                @foreach($listImage as $image)
                    @if($category['id'] == $image['category_image_id'])
                        <img src="upload/{{$image['image']}}" style="width: 100%; height: auto; margin-bottom: 15px">
                        <br>
                        @if(isset($image['description']))
                            <div style="text-align: center">
                                <i style="text-align: center">{{$image['description']}}</i>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
        @endforeach
    </div>
@endsection