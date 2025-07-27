@extends('client.layout')

@section('title')
Giỏ hàng
@endsection

@section('content')

<!--breadcumb area start -->
<div class="breadcumb-area overlay pos-rltv">
    <div class="bread-main">
        <div class="bred-hading text-center">
            <h5>Chi tiết giỏ hàng</h5>
        </div>
        <ol class="breadcrumb">
            <li class="home"><a title="Go to Home Page" href="{{ url('/') }}">Trang chủ</a></li>
            <li class="active">Giỏ hàng</li>
        </ol>
    </div>
</div>
<!--breadcumb area end -->

<!--cart-checkout-area start -->
<div class="cart-checkout-area  pt-30">
    <div class="container">
        <div class="row">
            <div class="product-area">
                <div class="title-tab-product-category">
                    <div class="col-md-12 text-center pb-60">
                        <ul class="nav heading-style-3" role="tablist">
                            <li role="presentation" class="active shadow-box"><a href="#cart" aria-controls="cart" role="tab" data-toggle="tab"><span>01</span> Giỏ hàng </a></li>
                            <li role="presentation" class="shadow-box"><a href="#checkout" aria-controls="checkout" role="tab" data-toggle="tab"><span>02</span>Thanh toán </a></li>
                            <li role="presentation" class="shadow-box"><a href="#complete-order" aria-controls="complete-order" role="tab" data-toggle="tab"><span>03</span> Kết thúc thanh toán </a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-12">
                    <div class="content-tab-product-category pb-70">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="cart">
                                <!-- cart are start-->
                                <div class="cart-page-area">
                                    <form method="post" action="#">
                                        <div class="table-responsive mb-20">
                                            <table class="shop_table-2 cart table">
                                                <thead>
                                                    <tr>
                                                        <th class="product-thumbnail">Hình ảnh</th>
                                                        <th class="product-name">Tên sản phẩm</th>
                                                        <th class="product-price">Đơn giá</th>
                                                        <th class="product-quantity">Số lượng</th>
                                                        <th class="product-subtotal">Tổng</th>
                                                        <th class="product-remove">Xóa</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="cart-items">
                                                    @foreach ($cart as $cartItem)
                                                    <tr class="cart_item" data-product-id="{{$cartItem['id']}}">
                                                        <td class="item-img">
                                                            <a href="{{ url('/detail', [$cartItem['id']]) }}">
                                                                <img src="/client/images/product/{{$cartItem['image']}}" alt="">
                                                            </a>
                                                        </td>
                                                        <td class="item-title">
                                                            <a href="#">{{$cartItem['name']}}</a>
                                                        </td>
                                                        <td class="item-price">
                                                            <span class="price-value">{{ number_format($cartItem['priceSale'], 0, ',', '.') }}</span>đ
                                                        </td>
                                                        <td class="item-qty">
                                                            <div class="cart-quantity">
                                                                <div class="product-qty">
                                                                    <div class="cart-quantity">
                                                                        <div class="cart-plus-minus">
                                                                            <div class="dec qtybutton" data-action="decrease">-</div>
                                                                            <input value="{{$cartItem['quantity']}}" 
                                                                                class="cart-plus-minus-box quantity-input" 
                                                                                type="text" 
                                                                                min="1"
                                                                                data-product-id="{{$cartItem['id']}}">
                                                                            <div class="inc qtybutton" data-action="increase">+</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="total-price">
                                                            <strong class="item-total">{{ number_format($cartItem['into_money'], 0, ',', '.') }}đ</strong>
                                                        </td>
                                                        <td class="remove-item">
                                                            <a href="#" class="remove-cart-item" data-product-id="{{$cartItem['id']}}">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="cart-bottom-area">
                                            <div class="row">
                                                <div class="col-md-8 col-sm-7 col-xs-12">
                                                    <div class="update-coupne-area">
                                                        <div class="update-continue-btn text-right pb-20">
                                                            <a href="{{ route('products') }}" class="btn-def btn2">Tiếp tục mua hàng</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-5 col-xs-12">
                                                    <div class="cart-total-area">
                                                        <div class="catagory-title cat-tit-5 mb-20 text-right">
                                                            <h3>Tổng giỏ hàng</h3>
                                                        </div>
                                                        <div class="sub-shipping">
                                                            <p>Tổng phụ <span id="subtotal">{{ number_format($total_amount, 0, ',', '.') }}VNĐ</span></p>
                                                            <p>Phí vận chuyển <span>0 VNĐ</span></p>
                                                        </div>
                                                        <div class="process-cart-total">
                                                            <p>Tổng tiền <span id="total-amount">{{ number_format($total_amount + 0, 0, ',', '.') }}VNĐ</span></p>
                                                        </div>
                                                        <div class="process-checkout-btn text-right">
                                                            <a class="btn-def btn2" href="#">Thanh toán</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

<!-- Loading overlay -->
<div id="cart-loading" class="cart-loading-overlay" style="display: none;">
    <div class="loading-spinner">
        <i class="fa fa-spinner fa-spin"></i>
        <p>Đang cập nhật...</p>
    </div>
</div>

<!-- Notification -->
<div id="cart-notification" class="cart-notification" style="display: none;">
    <div class="notification-content">
        <i class="fa fa-check-circle"></i>
        <span id="notification-message"></span>
    </div>
</div>

<style>
/* Loading overlay */
.cart-loading-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.loading-spinner {
    background: white;
    padding: 30px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.loading-spinner i {
    font-size: 24px;
    margin-bottom: 10px;
    color: #007bff;
}

/* Notification styles */
.cart-notification {
    position: fixed;
    top: 20px;
    right: 20px;
    background: #28a745;
    color: white;
    padding: 15px 20px;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    z-index: 9999;
    opacity: 0;
    transform: translateX(100%);
    transition: all 0.3s ease;
}

.cart-notification.show {
    opacity: 1;
    transform: translateX(0);
}

.cart-notification.error {
    background: #dc3545;
}

.notification-content {
    display: flex;
    align-items: center;
    gap: 10px;
}

/* Button hover effects */
.qtybutton {
    cursor: pointer;
    user-select: none;
    transition: all 0.2s ease;
}

.qtybutton:hover {
    background-color: #007bff;
    color: white;
}

.qtybutton:active {
    transform: scale(0.95);
}

.remove-cart-item {
    transition: all 0.2s ease;
}

.remove-cart-item:hover {
    color: #dc3545;
    transform: scale(1.1);
}

/* Animation for row removal */
.cart_item.removing {
    opacity: 0.5;
    transform: scale(0.95);
    transition: all 0.3s ease;
}

/* Input styling */
.cart-plus-minus-box {
    border: 1px solid #ddd;
    text-align: center;
    font-weight: bold;
}

.cart-plus-minus-box:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 5px rgba(0,123,255,0.3);
}

/* Empty cart message */
.empty-cart-message {
    text-align: center;
    padding: 50px 0;
    color: #666;
}

.empty-cart-message i {
    font-size: 48px;
    margin-bottom: 20px;
    color: #ddd;
}
</style>

<script>
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

<style>
/* Animation for updated row */
.cart_item.updated {
    background-color: #d4edda;
    transition: background-color 0.3s ease;
}

.cart_item {
    transition: all 0.3s ease;
}
</style>
                                </div>
                                <!-- cart are end-->
                            </div>
                            <div role="tabpanel" class="tab-pane  fade in " id="checkout">
                                <!-- Checkout are start-->
                                <div class="checkout-area">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="coupne-customer-area mb50">
                                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                        <div class="panel panel-checkout">
                                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                                <h4 class="panel-title">
                                                                    <img src="images/icons/acc.jpg" alt="">
                                                                    Returning customer?
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                        Click here to login
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                                <div class="panel-body">
                                                                    <div class="sm-des pb20">
                                                                        If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.
                                                                    </div>
                                                                    <div class="first-last-area">
                                                                        <div class="input-box mtb-20">
                                                                            <label>User Name Or Email</label>
                                                                            <input type="email" placeholder="Your Email" class="info" name="email">
                                                                        </div>
                                                                        <div class="input-box mb-20">
                                                                            <label>Password</label>
                                                                            <input type="password" placeholder="Password" class="info" name="padd">
                                                                        </div>
                                                                        <div class="frm-action cc-area">
                                                                            <div class="input-box tci-box">
                                                                                <a href="#" class="btn-def btn2">Login</a>
                                                                            </div>
                                                                            <span>
                                                                                <input type="checkbox" class="remr"> Remember me
                                                                            </span>
                                                                            <a class="forgotten forg" href="#">Forgotten Password</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-checkout">
                                                            <div class="panel-heading" role="tab" id="headingThree">
                                                                <h4 class="panel-title">
                                                                    <img src="images/icons/acc.jpg" alt="">
                                                                    Have A Coupon?
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                        Click here to enter your code
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                                <div class="panel-body coupon-body">

                                                                    <div class="first-last-area">
                                                                        <div class="input-box mtb-20">
                                                                            <input type="text" placeholder="Coupon Code" class="info" name="code">
                                                                        </div>
                                                                        <div class="frm-action">
                                                                            <div class="input-box tci-box">
                                                                                <a href="#" class="btn-def btn2">Apply Coupon</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-xs-12">
                                                        <div class="billing-details">
                                                            <div class="contact-text right-side">
                                                                <h2>Billing Details</h2>
                                                                <form action="#">
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="input-box mb-20">
                                                                                <label>First Name <em>*</em></label>
                                                                                <input type="text" name="namm" class="info" placeholder="First Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="input-box mb-20">
                                                                                <label>Last Name<em>*</em></label>
                                                                                <input type="text" name="namm" class="info" placeholder="Last Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="input-box mb-20">
                                                                                <label>Company Name</label>
                                                                                <input type="text" name="cpany" class="info" placeholder="Company Name">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="input-box mb-20">
                                                                                <label>Email Address<em>*</em></label>
                                                                                <input type="email" name="email" class="info" placeholder="Your Email">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="input-box mb-20">
                                                                                <label>Phone Number<em>*</em></label>
                                                                                <input type="text" name="phone" class="info" placeholder="Phone Number">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="input-box mb-20">
                                                                                <label>Country <em>*</em></label>
                                                                                <select class="selectpicker select-custom" data-live-search="true">
                                                                                    <option data-tokens="Bangladesh">Bangladesh</option>
                                                                                    <option data-tokens="India">India</option>
                                                                                    <option data-tokens="Pakistan">Pakistan</option>
                                                                                    <option data-tokens="Pakistan">Pakistan</option>
                                                                                    <option data-tokens="Srilanka">Srilanka</option>
                                                                                    <option data-tokens="Nepal">Nepal</option>
                                                                                    <option data-tokens="Butan">Butan</option>
                                                                                    <option data-tokens="USA">USA</option>
                                                                                    <option data-tokens="England">England</option>
                                                                                    <option data-tokens="Brazil">Brazil</option>
                                                                                    <option data-tokens="Canada">Canada</option>
                                                                                    <option data-tokens="China">China</option>
                                                                                    <option data-tokens="Koeria">Koeria</option>
                                                                                    <option data-tokens="Soudi">Soudi Arabia</option>
                                                                                    <option data-tokens="Spain">Spain</option>
                                                                                    <option data-tokens="France">France</option>
                                                                                </select>

                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="input-box mb-20">
                                                                                <label>Address <em>*</em></label>
                                                                                <input type="text" name="add1" class="info mb-10" placeholder="Street Address">
                                                                                <input type="text" name="add2" class="info mt10" placeholder="Apartment, suite, unit etc. (optional)">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="input-box mb-20">
                                                                                <label>Town/City <em>*</em></label>
                                                                                <input type="text" name="add1" class="info" placeholder="Town/City">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="input-box">
                                                                                <label>State/Divison <em>*</em></label>
                                                                                <select class="selectpicker select-custom" data-live-search="true">
                                                                                    <option data-tokens="Barisal">Barisal</option>
                                                                                    <option data-tokens="Dhaka">Dhaka</option>
                                                                                    <option data-tokens="Kulna">Kulna</option>
                                                                                    <option data-tokens="Rajshahi">Rajshahi</option>
                                                                                    <option data-tokens="Sylet">Sylet</option>
                                                                                    <option data-tokens="Chittagong">Chittagong</option>
                                                                                    <option data-tokens="Rangpur">Rangpur</option>
                                                                                    <option data-tokens="Maymanshing">Maymanshing</option>
                                                                                    <option data-tokens="Cox">Cox's Bazar</option>
                                                                                    <option data-tokens="Saint">Saint Martin</option>
                                                                                    <option data-tokens="Kuakata">Kuakata</option>
                                                                                    <option data-tokens="Sajeq">Sajeq</option>
                                                                                </select>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="input-box">
                                                                                <label>Post Code/Zip Code<em>*</em></label>
                                                                                <input type="text" name="zipcode" class="info" placeholder="Zip Code">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="create-acc clearfix mtb-20">
                                                                                <div class="acc-toggle">
                                                                                    <input type="checkbox" id="acc-toggle">
                                                                                    <label for="acc-toggle">Create an Account ?</label>
                                                                                </div>
                                                                                <div class="create-acc-body">
                                                                                    <div class="sm-des">
                                                                                        Create an account by entering the information below. If you are a returning customer please login at the top of the page.
                                                                                    </div>
                                                                                    <div class="input-box">
                                                                                        <label>Account password <em>*</em></label>
                                                                                        <input type="password" name="pass" class="info" placeholder="Password">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xs-12">
                                                        <div class="billing-details">
                                                            <div class="right-side">
                                                                <div class="ship-acc clearfix">
                                                                    <div class="ship-toggle pb20">
                                                                        <input type="checkbox" id="ship-toggle">
                                                                        <label for="ship-toggle">Ship to a different address?</label>
                                                                    </div>
                                                                    <div class="ship-acc-body">
                                                                        <form action="#">
                                                                            <div class="row">
                                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>First Name <em>*</em></label>
                                                                                        <input type="text" name="namm" class="info" placeholder="First Name">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Last Name<em>*</em></label>
                                                                                        <input type="text" name="namm" class="info" placeholder="Last Name">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Company Name</label>
                                                                                        <input type="text" name="cpany" class="info" placeholder="Company Name">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Email Address<em>*</em></label>
                                                                                        <input type="email" name="email" class="info" placeholder="Your Email">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Phone Number<em>*</em></label>
                                                                                        <input type="text" name="phone" class="info" placeholder="Phone Number">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Country <em>*</em></label>
                                                                                        <select class="selectpicker select-custom" data-live-search="true">
                                                                                            <option data-tokens="Bangladesh">Bangladesh</option>
                                                                                            <option data-tokens="India">India</option>
                                                                                            <option data-tokens="Pakistan">Pakistan</option>
                                                                                            <option data-tokens="Pakistan">Pakistan</option>
                                                                                            <option data-tokens="Srilanka">Srilanka</option>
                                                                                            <option data-tokens="Nepal">Nepal</option>
                                                                                            <option data-tokens="Butan">Butan</option>
                                                                                            <option data-tokens="USA">USA</option>
                                                                                            <option data-tokens="England">England</option>
                                                                                            <option data-tokens="Brazil">Brazil</option>
                                                                                            <option data-tokens="Canada">Canada</option>
                                                                                            <option data-tokens="China">China</option>
                                                                                            <option data-tokens="Koeria">Koeria</option>
                                                                                            <option data-tokens="Soudi">Soudi Arabia</option>
                                                                                            <option data-tokens="Spain">Spain</option>
                                                                                            <option data-tokens="France">France</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Address <em>*</em></label>
                                                                                        <input type="text" name="add1" class="info mb-10" placeholder="Street Address">
                                                                                        <input type="text" name="add2" class="info mt10" placeholder="Apartment, suite, unit etc. (optional)">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Town/City <em>*</em></label>
                                                                                        <input type="text" name="add1" class="info" placeholder="Town/City">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>State/Divison <em>*</em></label>
                                                                                        <select class="selectpicker select-custom" data-live-search="true">
                                                                                            <option data-tokens="Barisal">Barisal</option>
                                                                                            <option data-tokens="Dhaka">Dhaka</option>
                                                                                            <option data-tokens="Kulna">Kulna</option>
                                                                                            <option data-tokens="Rajshahi">Rajshahi</option>
                                                                                            <option data-tokens="Sylet">Sylet</option>
                                                                                            <option data-tokens="Chittagong">Chittagong</option>
                                                                                            <option data-tokens="Rangpur">Rangpur</option>
                                                                                            <option data-tokens="Maymanshing">Maymanshing</option>
                                                                                            <option data-tokens="Cox">Cox's Bazar</option>
                                                                                            <option data-tokens="Saint">Saint Martin</option>
                                                                                            <option data-tokens="Kuakata">Kuakata</option>
                                                                                            <option data-tokens="Sajeq">Sajeq</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Post Code/Zip Code<em>*</em></label>
                                                                                        <input type="text" name="zipcode" class="info" placeholder="Zip Code">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="form">
                                                                    <div class="input-box">
                                                                        <label>Order Notes</label>
                                                                        <textarea placeholder="Notes about your order, e.g. special notes for delivery." class="area-tex"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Checkout are end-->
                            </div>
                            <div role="tabpanel" class="tab-pane  fade in" id="complete-order">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="checkout-payment-area">
                                            <div class="checkout-total mt20">
                                                <h3>Your order</h3>
                                                <form action="#" method="post">
                                                    <div class="table-responsive">
                                                        <table class="checkout-area table">
                                                            <thead>
                                                                <tr class="cart_item check-heading">
                                                                    <td class="ctg-type"> Product</td>
                                                                    <td class="cgt-des"> Total</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="cart_item check-item prd-name">
                                                                    <td class="ctg-type"> Aenean sagittis × <span>1</span></td>
                                                                    <td class="cgt-des"> $1,026.00</td>
                                                                </tr>
                                                                <tr class="cart_item check-item prd-name">
                                                                    <td class="ctg-type"> Aenean sagittis × <span>1</span></td>
                                                                    <td class="cgt-des"> $1,026.00</td>
                                                                </tr>
                                                                <tr class="cart_item">
                                                                    <td class="ctg-type"> Subtotal</td>
                                                                    <td class="cgt-des">$2,052.00</td>
                                                                </tr>
                                                                <tr class="cart_item">
                                                                    <td class="ctg-type">Shipping</td>
                                                                    <td class="cgt-des ship-opt">
                                                                        <div class="shipp">
                                                                            <input type="radio" id="pay-toggle" name="ship">
                                                                            <label for="pay-toggle">Flat Rate: <span>$03</span></label>
                                                                        </div>
                                                                        <div class="shipp">
                                                                            <input type="radio" id="pay-toggle2" name="ship">
                                                                            <label for="pay-toggle2">Free Shipping</label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cart_item">
                                                                    <td class="ctg-type crt-total"> Total</td>
                                                                    <td class="cgt-des prc-total"> $ 2,055.00 </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="payment-section mt-20 clearfix">
                                                <div class="pay-toggle">
                                                    <form action="#">
                                                        <div class="pay-type-total">
                                                            <div class="pay-type">
                                                                <input type="radio" id="pay-toggle01" name="pay">
                                                                <label for="pay-toggle01">Direct Bank Transfer</label>
                                                            </div>
                                                            <div class="pay-type">
                                                                <input type="radio" id="pay-toggle02" name="pay">
                                                                <label for="pay-toggle02">Cheque Payment</label>
                                                            </div>
                                                            <div class="pay-type">
                                                                <input type="radio" id="pay-toggle03" name="pay">
                                                                <label for="pay-toggle03">Cash on Delivery</label>
                                                            </div>
                                                            <div class="pay-type">
                                                                <input type="radio" id="pay-toggle04" name="pay">
                                                                <label for="pay-toggle04">Paypal</label>
                                                            </div>
                                                        </div>
                                                        <div class="input-box mt-20">
                                                            <a class="btn-def btn2" href="#">Place order</a>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--cart-checkout-area end-->

@endsection