@extends('admin.layouts.app')
@section('title-content')
    Sửa Danh Mục Sản Phẩm
@endsection
@section('content')
    <div class="col-md-12">
        <div class="col-md-12" ><h4>Tên Danh Mục</h4></div>
        <form method="post" action="{{route('edit_category_image')}}">
            {{csrf_field()}}
            <div class="col-md-8">
                <div class="form-group">
                    <input type="hidden" name="id_category_image" value="{{$categoryImage['id']}}">
                    <input type="text" name="name_category_image" class="form-control" value="{{$categoryImage['name']}}">
                </div>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Sửa Danh Mục</button>
            </div>
        </form>
    </div>
    <div class="col-md-12" style="border-top: 1px solid #ffffff;"></div>
    <div class="col-md-12" >
        <div class="col-md-12" ><h4>Danh Sách Danh Mục</h4>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th style="width:10%;">STT</th>
                    <th style="width: 50%">Tên Danh Mục</th>
                    <th style="width: 20%">Ngày Tạo</th>
                    <th style="width: 20%"></th>
                </tr>
                </thead>
                <tbody>
                @if(!empty($categoryImages))
                    @foreach($categoryImages as $value)
                        <tr>
                            <td>{{$value['id']}}</td>
                            <td>{{$value['name']}}</td>
                            <td>{{$value['created_at']}}</td>
                            <td>
                                <a href="{{route('show_edit_category_image',$value['id'])}}">
                                    <button class="btn btn-warning btn-sm" data-id="{{$value['id']}}"><i class="fa fa-trash"></i> Sửa</button>
                                </a>
                                <a href="{{route('delete_category_image',$value['id'])}}">
                                    <button class="btn btn-danger btn-sm" data-id="{{$value['id']}}"><i class="fa fa-trash"></i> Xoá</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>

    </div>

@endsection