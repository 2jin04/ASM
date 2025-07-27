@extends('client.layout')

@section('title')
Đăng ký
@endsection

@section('content')

<!--breadcumb area start -->
<div class="breadcumb-area overlay pos-rltv">
    <div class="bread-main">
        <div class="bred-hading text-center">
            <h5>Đăng ký</h5>
        </div>
        <ol class="breadcrumb">
            <li class="home"><a title="Go to Home Page" href="index.html">Trang chủ</a></li>
            <li class="active">Đăng ký</li>
        </ol>
    </div>
</div>
<!--breadcumb area end -->

<!-- Account Area Start -->
<div class="account-area ptb-80">
    <div class="container">
        <div class="row">
            <div style="display: flex; justify-content: center;">
            <div class="col-sm-6 col-xs-6">
                    <form action="{{url('/register')}}" method="post" class="login-side">@csrf
                        <div class="login-reg">
                            <h3>Đăng ký</h3>
                            <div class="input-box mb-20">
                                <label class="control-label">Tên</label>
                                <input type="text" value="{{old('name')}}" name="name" class="info">
                            </div>
                            <div class="input-box mb-20">
                                <label class="control-label">Email</label>
                                <input type="email" value="{{old('email')}}" name="email" class="info">
                            </div>
                            <div class="input-box mb-20">
                                <label class="control-label">Số điện thoại</label>
                                <input type="text" value="{{old('phone')}}" name="phone" class="info">
                            </div>
                            <div class="input-box mb-20">
                                <label class="control-label">Địa chỉ</label>
                                <input type="text" value="{{old('address')}}" name="address" class="info">
                            </div>
                            <div class="input-box">
                                <label class="control-label">Mật khẩu</label>
                                <input type="password" value="{{old('password')}}" name="password" class="info">
                            </div>
                            <div class="input-box">
                                <label class="control-label">Xác nhận mật khẩu</label>
                                <input type="password" value="{{old('confirmpassword')}}" name="confirmpassword" class="info">
                            </div>
                        </div>
                        <div class="frm-action">
                            <div class="input-box tci-box">
                                <button type="submit" class="btn btn-info">Đăng ký</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Account Area End -->

@endsection