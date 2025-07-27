<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Đăng nhập</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/admin/images/favicon.ico">

    <!-- App css -->
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="/admin/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/css/style.css" rel="stylesheet" type="text/css" />

    <script src="/admin/js/modernizr.min.js"></script>

</head>


<body class="bg-accpunt-pages">

    <!-- HOME -->
    <section>
        <div class="container">
            <div class="alerts-container">
                @foreach ($errors->all() as $error)
                <div class="alert">
                    <span class="closebtn">&times;</span>
                    <strong><i class="fa-solid fa-circle-exclamation"></i></strong> {{ $error }}
                </div>
                @endforeach
            </div>
            <div class="alerts-container">
                @if(session()->has('alert'))
                <div class="alert">
                    <span class="closebtn">&times;</span>
                    <strong><i class="fa-solid fa-circle-exclamation"></i></strong> {!! session('alert') !!}
                </div>
                @endif
                @if(session()->has('success'))
                <div class="alert success">
                    <span class="closebtn">&times;</span>
                    <strong><i class="fa-solid fa-circle-exclamation"></i></strong> {!! session('success') !!}
                </div>
                @endif
                @if(session()->has('info'))
                <div class="alert info">
                    <span class="closebtn">&times;</span>
                    <strong><i class="fa-solid fa-circle-exclamation"></i></strong> {!! session('info') !!}
                </div>
                @endif
                @if(session()->has('warning'))
                <div class="alert warning">
                    <span class="closebtn">&times;</span>
                    <strong><i class="fa-solid fa-circle-exclamation"></i></strong> {!! session('warning') !!}
                </div>
                @endif
            </div>
            <div class="row">
                <div class="col-sm-12">

                    <div class="wrapper-page">

                        <div class="account-pages">
                            <div class="account-box">
                                <div class="account-logo-box">
                                    <h2 class="text-uppercase text-center">
                                        <a href="index.html" class="text-success">
                                            <span><img src="/admin/images/logo_dark.png" alt="" height="18"></span>
                                        </a>
                                    </h2>
                                    <h6 class="text-uppercase text-center font-bold mt-4">Đăng nhập</h6>
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" action="{{url('admin/login')}}" method="post">@csrf

                                        <div class="form-group m-b-20 row">
                                            <div class="col-12">
                                                <label for="emailaddress">Email</label>
                                                <input class="form-control" type="email" name="email" id="emailaddress" required="" placeholder="Nhập email của bạn">
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <label for="password">Mật khẩu</label>
                                                <input class="form-control" type="password" name="password" required="" id="password" placeholder="Nhập mật khẩu của bạn">
                                                <a href="page-recoverpw.html" class="text-muted pull-right"><small>Lấy lại mật khẩu?</small></a>
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">

                                                <div class="checkbox checkbox-success">
                                                    <input id="remember" type="checkbox" checked="">
                                                    <label for="remember">
                                                        Ghi nhớ tôi
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group row text-center m-t-10">
                                            <div class="col-12">
                                                <button class="btn btn-block btn-gradient waves-effect waves-light" type="submit">Đăng nhập</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- end card-box-->


                    </div>
                    <!-- end wrapper -->

                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->


    <!-- jQuery  -->
    <script src="/admin/js/jquery.min.js"></script>
    <script src="/admin/js/popper.min.js"></script>
    <script src="/admin/js/bootstrap.min.js"></script>
    <script src="/admin/js/metisMenu.min.js"></script>
    <script src="/admin/js/waves.js"></script>
    <script src="/admin/js/jquery.slimscroll.js"></script>

    <!-- App js -->
    <script src="/admin/js/jquery.core.js"></script>
    <script src="/admin/js/jquery.app.js"></script>
    <script src="/admin/js/main.js"></script>

</body>

</html>