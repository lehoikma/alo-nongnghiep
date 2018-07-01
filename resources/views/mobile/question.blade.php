@extends('layout')
@section('title')
    Hỏi Đáp
@endsection
@section('content')
    <div class="col-xs-12" style="padding-bottom: 15px">
        <h4 style="border-bottom: 1px solid #dff0d8; padding-bottom: 10px; padding-top: 10px">
            <a href="/">Trang Chủ</a> > Hỏi Đáp</h4>
        <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
        @endforeach
    </div> <!-- end .flash-message -->
    <div>
        <form method="post" action="{{route('save_question')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="comment">Tên:</label>
                <input type="text" class="form-control" name="name" value="{{old('name')}}">
                @if ($errors->has('name'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="comment">Email:</label>
                <input type="text" class="form-control" name="email" value="{{old('email')}}">
                @if ($errors->has('email'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="comment">Số Điện Thoại:</label>
                <input type="text" class="form-control" name="phone" value="{{old('phone')}}">
                @if ($errors->has('phone'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('phone') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="comment">Câu hỏi:</label>
                <textarea class="form-control" rows="5" name="content">{{old('content')}}</textarea>
                @if ($errors->has('content'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('content') }}</p>
                @endif
            </div>
            <div class="form-group" style="text-align: center">
                <button type="submit" class="btn btn-success">Gửi Tư Vấn</button>
            </div>
        </form>
    </div>
    </div>
@endsection