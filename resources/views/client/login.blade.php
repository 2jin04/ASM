@extends('client.layout')

@section('title')
Đăng nhập
@endsection

@section('content')

<!--breadcumb area start -->
<div class="breadcumb-area overlay pos-rltv">
    <div class="bread-main">
        <div class="bred-hading text-center">
            <h5>Đăng nhập</h5>
        </div>
        <ol class="breadcrumb">
            <li class="home"><a title="Go to Home Page" href="index.html">Trang chủ</a></li>
            <li class="active">Đăng nhập</li>
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
                    <form action="{{url('/login')}}" method="post" class="login-side">@csrf
                        <div class="login-reg">
                            <h3>Đăng nhập</h3>
                            <div class="input-box mb-20">
                                <label class="control-label">Email</label>
                                <input type="email" placeholder="E-Mail" value="" name="email" class="info">
                            </div>
                            <div class="input-box">
                                <label class="control-label">Mật khẩu</label>
                                <input type="password" placeholder="Password" value="" name="password" class="info">
                            </div>
                        </div>
                        <div class="frm-action">
                            <div class="input-box tci-box">
                                <button type="submit" class="btn btn-info">Đăng nhập</button>
                            </div>

                            <a href="#" class="forgotten forg">Lấy lại mật khẩu?</a>
                        </div>
                        <div class="frm-action">
                            <div id="dngooggle" class="text-center">
                                <a href="http://localhost:8000/login/google">
                                    <img width="150" src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png">
                                </a>
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