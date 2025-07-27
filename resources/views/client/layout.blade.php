<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" href="/client/images/icons/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="/client/css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="/client/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="/client/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="/client/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="/client/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="/client/css/custom.css">
    <link rel="stylesheet" href="/client/css/color/skin-default.css">
    <!-- Alert style -->
    <link rel="stylesheet" href="/alert/alert.css">

    <!-- Modernizr JS -->
    <script src="/client/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
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
    <!-- Body main wrapper start -->
    <div class="wrapper home-one">



        <!-- Start of header area -->
        <header class="header-area header-wrapper">
            <div class="header-top-bar black-bg clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="login-register-area">
                                @if (Auth::check())
                                <ul>
                                    <li><a href="/account/profile">{{Auth::user()->name}}</a></li>
                                    @if (Auth::user()->role==0)
                                    <li><a href="/admin/dashboard">Admin</a></li>
                                    @endif
                                    <li><a href="/exit">Đăng xuất</a></li>
                                </ul>
                                @else
                                <ul>
                                    <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                                    <li><a href="{{ route('register') }}">Đăng ký</a></li>
                                </ul>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 hidden-xs">
                            <div class="social-search-area text-center">
                                <div class="social-icon socile-icon-style-2">
                                    <ul>
                                        <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a> </li>
                                        <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a> </li>
                                        <li> <a href="#" title="dribble"><i class="fa fa-dribbble"></i></a></li>
                                        <li> <a href="#" title="behance"><i class="fa fa-behance"></i></a> </li>
                                        <li> <a href="#" title="rss"><i class="fa fa-rss"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="cart-currency-area login-register-area text-right">
                                <ul>
                                    <li>
                                        <div class="header-currency">
                                            <select>
                                                <option value="1">VNĐ</option>
                                                <option value="2">USD</option>
                                                <option value="3">Euro</option>
                                                <option value="4">Dinar</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="header-cart">
                                            <div class="cart-icon"> <a href="{{ route('cart') }}">Cart<i class="zmdi zmdi-shopping-cart"></i></a> <span>2</span> </div>
                                            <div class="cart-content-wraper">
                                                <div class="cart-single-wraper">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="/client/images/product/01.jpg" alt=""></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <div class="cart-name"> <a href="#">Aenean Eu Tristique</a> </div>
                                                        <div class="cart-price"> $70.00 </div>
                                                        <div class="cart-qty"> Qty: <span>1</span> </div>
                                                    </div>
                                                    <div class="remove"> <a href="#"><i class="zmdi zmdi-close"></i></a> </div>
                                                </div>
                                                <div class="cart-single-wraper">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="/client/images/product/02.jpg" alt=""></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <div class="cart-name"> <a href="#">Aenean Eu Tristique</a> </div>
                                                        <div class="cart-price"> $70.00 </div>
                                                        <div class="cart-qty"> Qty: <span>1</span> </div>
                                                    </div>
                                                    <div class="remove"> <a href="#"><i class="zmdi zmdi-close"></i></a> </div>
                                                </div>
                                                <div class="cart-subtotal"> Subtotal: <span>$200.00</span> </div>
                                                <div class="cart-check-btn">
                                                    <div class="view-cart"> <a class="btn-def" href="{{ route('cart') }}">View Cart</a> </div>
                                                    <div class="check-btn"> <a class="btn-def" href="checkout.html">Checkout</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('client.menu')
        </header>
        <!-- End of header area -->

        @yield('content')

        <!-- footer area start-->
        <div class="footer-area ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="single-footer contact-us">
                            <div class="footer-title uppercase">
                                <h5>Liên hệ</h5>
                            </div>
                            <ul>
                                <li>
                                    <div class="contact-icon"> <i class="zmdi zmdi-pin-drop"></i> </div>
                                    <div class="contact-text">
                                        <p><span>418 Nguyên thái sơn, P5,</span> <span>Gò vấp, Hồ Chí Minh</span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon"> <i class="zmdi zmdi-email-open"></i> </div>
                                    <div class="contact-text">
                                        <p><span><a href="#">conghia0802@gmail.com</a></span> <span><a href="#">congnghia717@gmail.com</a></span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon"> <i class="zmdi zmdi-phone-paused"></i> </div>
                                    <div class="contact-text">
                                        <p><span>+84 367 775 413 </span><br> <span>+84 345 678 900</span></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                        <div class="single-footer informaton-area">
                            <div class="footer-title uppercase">
                                <h5>=Thông tin</h5>
                            </div>
                            <div class="informatoin">
                                <ul>
                                    <li><a href="#">Tài khoản của tôi</a></li>
                                    <li><a href="#">Lịch sử đơn hàng</a></li>
                                    <li><a href="#">Danh sách yêu thích</a></li>
                                    <li><a href="#">Chính sách riêng tư</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 hidden-sm col-xs-12">
                        <div class="single-footer instagrm-area">
                            <div class="footer-title uppercase">
                                <h5>InstaGram</h5>
                            </div>
                            <div class="instagrm">
                                <ul>
                                    <li><a href="#"><img src="/client/images/gallery/01.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/client/images/gallery/02.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/client/images/gallery/03.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/client/images/gallery/04.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/client/images/gallery/05.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/client/images/gallery/06.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-lg-offset-1 col-xs-12">
                        <div class="single-footer newslatter-area">
                            <div class="footer-title uppercase">
                                <h5>Nhận tin tức mới</h5>
                            </div>
                            <div class="newslatter">
                                <form action="#" method="post">
                                    <div class="input-box pos-rltv">
                                        <input placeholder="Nhập email của bạn" type="text">
                                        <a href="#">
                                            <i class="zmdi zmdi-arrow-right"></i>
                                        </a>
                                    </div>
                                </form>
                                <div class="social-icon socile-icon-style-3 mt-40">
                                    <div class="footer-title uppercase">
                                        <h5>Mạng xã hội</h5>
                                    </div>
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer area start-->

        <!--footer bottom area start-->
        <div class="footer-bottom global-table">
            <div class="global-row">
                <div class="global-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="copyrigth"> Copyright @
                                    <a href="#">HanJ</a> All right reserved
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <ul class="payment-support text-right">
                                    <li>
                                        <a href="#"><img src="/client/images/icons/pay1.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/client/images/icons/pay2.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/client/images/icons/pay3.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/client/images/icons/pay4.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/client/images/icons/pay5.png" alt="" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer bottom area end-->



        <!-- QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <div class="product-images">
                                    <!--modal tab start-->
                                    <div class="portfolio-thumbnil-area-2">
                                        <div class="tab-content active-portfolio-area-2">
                                            <div role="tabpanel" class="tab-pane active" id="view1">
                                                <div class="product-img">
                                                    <a href="#"><img src="/client/images/product/01.jpg" alt="Single portfolio" /></a>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="view2">
                                                <div class="product-img">
                                                    <a href="#"><img src="/client/images/product/02.jpg" alt="Single portfolio" /></a>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="view3">
                                                <div class="product-img">
                                                    <a href="#"><img src="/client/images/product/03.jpg" alt="Single portfolio" /></a>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="view4">
                                                <div class="product-img">
                                                    <a href="#"><img src="/client/images/product/04.jpg" alt="Single portfolio" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-more-views-2">
                                            <div class="thumbnail-carousel-modal-2" data-tabs="tabs">
                                                <a href="#view1" aria-controls="view1" data-toggle="tab"><img src="/client/images/product/01.jpg" alt="" /></a>
                                                <a href="#view2" aria-controls="view2" data-toggle="tab"><img src="/client/images/product/02.jpg" alt="" /></a>
                                                <a href="#view3" aria-controls="view3" data-toggle="tab"><img src="/client/images/product/03.jpg" alt="" /></a>
                                                <a href="#view4" aria-controls="view4" data-toggle="tab"><img src="/client/images/product/04.jpg" alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--modal tab end-->
                                <!-- .product-images -->
                                <div class="product-info">
                                    <h1>Aenean eu tristique</h1>
                                    <div class="price-box-3">
                                        <div class="s-price-box"> <span class="new-price">$160.00</span> <span class="old-price">$190.00</span> </div>
                                    </div> <a href="shop.html" class="see-all">See all features</a>
                                    <div class="quick-add-to-cart">
                                        <form method="post" class="cart">
                                            <div class="numbers-row">
                                                <input type="number" id="french-hens" value="3" min="1">
                                            </div>
                                            <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="quick-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.Nam fringilla tristique auctor. </div>
                                    <div class="social-sharing-modal">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social-icons-modal">
                                                <li><a target="_blank" title="Facebook" href="#" class="facebook m-single-icon"><i class="fa fa-facebook"></i></a></li>
                                                <li><a target="_blank" title="Twitter" href="#" class="twitter m-single-icon"><i class="fa fa-twitter"></i></a></li>
                                                <li><a target="_blank" title="Pinterest" href="#" class="pinterest m-single-icon"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a target="_blank" title="Google +" href="#" class="gplus m-single-icon"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a target="_blank" title="LinkedIn" href="#" class="linkedin m-single-icon"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- .product-info -->
                            </div>
                            <!-- .modal-product -->
                        </div>
                        <!-- .modal-body -->
                    </div>
                    <!-- .modal-content -->
                </div>
                <!-- .modal-dialog -->
            </div>
            <!-- END Modal -->
        </div>
        <!-- END QUICKVIEW PRODUCT -->
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="/client/js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="/client/js/bootstrap.min.js"></script>
    <!-- Slider js -->
    <script src="/client/js/slider/jquery.nivo.slider.pack.js"></script>
    <script src="/client/js/slider/nivo-active.js"></script>
    <!-- counterUp-->
    <script src="/client/js/jquery.countdown.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="/client/js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="/client/js/main.js"></script>
    <script src="/alert/alert.js"></script>

    <!-- <script>
        $(document).ready(function() {
            $('.add-to-cart').click(function(e) {
                e.preventDefault();
                let idProduct = $(this).data('id');
                let quantity = $(this).data('quantity');

                $.ajax({
                    url: `/addcart/${idProduct}/${quantity}`,
                    type: 'GET',
                    success: function(response) {
                        if (response.success) {
                            alert('Đã thêm vào giỏ hàng');
                        } else {
                            alert('Có lỗi xảy ra');
                        }
                    },
                    error: function() {
                        alert('Có lỗi xảy ra khi thêm vào giỏ hàng');
                    }
                });
            });
        });
    </script> -->
    <script>
        $(document).ready(function() {
  // CSRF token cho Laravel
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  // Xử lý click add to cart
  $('.add-to-cart-btn').click(function(e) {
    e.preventDefault();
    
    const $btn = $(this);
    const productId = $btn.data('product-id');
    const quantity = $btn.data('quantity');
    
    // Thêm loading state
    $btn.addClass('loading');
    
    // Gửi AJAX request
    $.ajax({
      url: '/addcart-ajax', // Đảm bảo route này đúng
      type: 'POST',
      data: {
        idProduct: productId,
        quantity: quantity
      },
      success: function(response) {
        if (response.success) {
          // Hiển thị thông báo thành công
          showNotification(response.message, 'success');
          
          // Cập nhật số lượng cart trong header (nếu có)
          updateCartCount(response.cartCount);
          
          // Hiệu ứng thành công cho button
          $btn.removeClass('loading').addClass('success');
          setTimeout(() => {
            $btn.removeClass('success');
          }, 1000);
        }
      },
      error: function(xhr, status, error) {
        console.error('Error:', error);
        showNotification('Có lỗi xảy ra, vui lòng thử lại!', 'error');
        $btn.removeClass('loading');
      }
    });
  });
  
  // Hàm hiển thị thông báo
  function showNotification(message, type = 'success') {
    const $notification = $('#cart-notification');
    const $messageSpan = $('#notification-message');
    
    // Đặt màu sắc theo loại thông báo
    if (type === 'success') {
      $notification.css('background', '#28a745');
    } else if (type === 'error') {
      $notification.css('background', '#dc3545');
    }
    
    $messageSpan.text(message);
    $notification.show().addClass('show');
    
    // Tự động ẩn sau 3 giây
    setTimeout(() => {
      $notification.removeClass('show');
      setTimeout(() => {
        $notification.hide();
      }, 300);
    }, 3000);
  }
  
  // Hàm cập nhật số lượng cart
  function updateCartCount(count) {
    // Tìm và cập nhật element hiển thị số lượng cart
    $('.cart-count').text(count);
    $('#cart-count').text(count);
    
    // Thêm hiệu ứng bounce cho icon cart
    $('.cart-icon').addClass('bounce');
    setTimeout(() => {
      $('.cart-icon').removeClass('bounce');
    }, 600);
  }
});
</script>

<!-- CSS bổ sung cho hiệu ứng -->
<style>
.add-to-cart-btn.success {
  background-color: #28a745 !important;
  transform: scale(1.1);
}

.cart-icon.bounce {
  animation: bounceCart 0.6s ease-in-out;
}

@keyframes bounceCart {
  0%, 20%, 60%, 100% {
    transform: translateY(0);
  }
  40% {
    transform: translateY(-10px);
  }
  80% {
    transform: translateY(-5px);
  }
}

$(document).ready(function() {
    // CSRF token setup
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Xử lý tăng giảm số lượng
    $(document).on('click', '.qtybutton', function() {
        const $btn = $(this);
        const $input = $btn.siblings('.quantity-input');
        const currentQty = parseInt($input.val());
        const action = $btn.data('action');
        const productId = $input.data('product-id');
        
        let newQty = currentQty;
        
        if (action === 'increase') {
            newQty = currentQty + 1;
        } else if (action === 'decrease' && currentQty > 1) {
            newQty = currentQty - 1;
        }
        
        if (newQty !== currentQty) {
            updateCartQuantity(productId, newQty, $input);
        }
    });

    // Xử lý thay đổi trực tiếp input
    $(document).on('change', '.quantity-input', function() {
        const $input = $(this);
        const newQty = parseInt($input.val());
        const productId = $input.data('product-id');
        
        if (newQty < 1) {
            $input.val(1);
            showNotification('Số lượng phải lớn hơn 0', 'error');
            return;
        }
        
        updateCartQuantity(productId, newQty, $input);
    });

    // Xử lý xóa sản phẩm
    $(document).on('click', '.remove-cart-item', function(e) {
        e.preventDefault();
        
        const productId = $(this).data('product-id');
        const $row = $(this).closest('.cart_item');
        
        if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng?')) {
            removeCartItem(productId, $row);
        }
    });

    // Hàm cập nhật số lượng
    function updateCartQuantity(productId, quantity, $input) {
        showLoading();
        
        $.ajax({
            url: '/cart/update-quantity',
            type: 'POST',
            data: {
                productId: productId,
                quantity: quantity
            },
            success: function(response) {
                hideLoading();
                
                if (response.success) {
                    // Cập nhật input
                    $input.val(response.quantity);
                    
                    // Cập nhật tổng tiền của item
                    const $row = $input.closest('.cart_item');
                    $row.find('.item-total').text(response.itemTotal);
                    
                    // Cập nhật tổng giỏ hàng
                    $('#subtotal').text(response.totalAmount);
                    $('#total-amount').text(response.totalAmount);
                    
                    // Cập nhật số lượng cart trong header
                    updateCartCount(response.cartCount);
                    
                    // Hiệu ứng thành công
                    $row.addClass('updated');
                    setTimeout(() => {
                        $row.removeClass('updated');
                    }, 1000);
                    
                    showNotification(response.message, 'success');
                } else {
                    showNotification(response.message, 'error');
                    // Reset về giá trị cũ nếu có lỗi
                    $input.val($input.data('old-value') || 1);
                }
            },
            error: function(xhr, status, error) {
                hideLoading();
                console.error('Error:', error);
                showNotification('Có lỗi xảy ra, vui lòng thử lại!', 'error');
                $input.val($input.data('old-value') || 1);
            }
        });
    }

    // Hàm xóa sản phẩm
    function removeCartItem(productId, $row) {
        $row.addClass('removing');
        showLoading();
        
        $.ajax({
            url: '/cart/remove-item',
            type: 'POST',
            data: {
                productId: productId
            },
            success: function(response) {
                hideLoading();
                
                if (response.success) {
                    // Xóa row với animation
                    $row.slideUp(300, function() {
                        $(this).remove();
                        
                        // Kiểm tra nếu giỏ hàng trống
                        if (response.isEmpty) {
                            showEmptyCart();
                        } else {
                            // Cập nhật tổng tiền
                            $('#subtotal').text(response.totalAmount);
                            $('#total-amount').text(response.totalAmount);
                        }
                        
                        // Cập nhật số lượng cart
                        updateCartCount(response.cartCount);
                    });
                    
                    showNotification(response.message, 'success');
                } else {
                    $row.removeClass('removing');
                    showNotification(response.message, 'error');
                }
            },
            error: function(xhr, status, error) {
                hideLoading();
                $row.removeClass('removing');
                console.error('Error:', error);
                showNotification('Có lỗi xảy ra, vui lòng thử lại!', 'error');
            }
        });
    }

    // Hiển thị giỏ hàng trống
    function showEmptyCart() {
        const emptyMessage = `
            <tr>
                <td colspan="6" class="empty-cart-message">
                    <i class="fa fa-shopping-cart"></i>
                    <h4>Giỏ hàng của bạn đang trống</h4>
                    <p>Hãy thêm sản phẩm vào giỏ hàng để tiếp tục mua sắm</p>
                    <a href="${"{{ route('products') }}"}" class="btn-def btn2">Tiếp tục mua sắm</a>
                </td>
            </tr>
        `;
        $('#cart-items').html(emptyMessage);
        $('.cart-bottom-area').hide();
    }

    // Utility functions
    function showLoading() {
        $('#cart-loading').show();
    }

    function hideLoading() {
        $('#cart-loading').hide();
    }

    function showNotification(message, type = 'success') {
        const $notification = $('#cart-notification');
        const $messageSpan = $('#notification-message');
        
        $notification.removeClass('error success').addClass(type);
        $messageSpan.text(message);
        $notification.show().addClass('show');
        
        setTimeout(() => {
            $notification.removeClass('show');
            setTimeout(() => {
                $notification.hide();
            }, 300);
        }, 3000);
    }

    function updateCartCount(count) {
        $('.cart-count').text(count);
        $('#cart-count').text(count);
    }

    // Lưu giá trị cũ khi focus vào input
    $(document).on('focus', '.quantity-input', function() {
        $(this).data('old-value', $(this).val());
    });
});
    </script>

</body>

</html>