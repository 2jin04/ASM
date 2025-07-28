@extends('client.layout')

@section('title')
Trang chủ
@endsection

@section('content')
<div id="cart-notification" class="cart-notification" style="display: none;">
  <div class="notification-content">
    <i class="zmdi zmdi-check-circle"></i>
    <span id="notification-message"></span>
  </div>
</div>
<!--slider area start-->
<div class="slider-area pos-rltv carosule-pagi cp-line">
  <div class="active-slider">
    <div class="single-slider pos-rltv">
      <div class="slider-img"><img src="/client/images/slider/slider01.jpg" alt=""></div>
      <div class="slider-content pos-abs">
        <h4>Best Collection</h4>
        <h1 class="uppercase pos-rltv underline">exclusive Fashion 2016</h1>
        <a href="#" class="btn-def btn-white">Shop Now</a>
      </div>
    </div>
    <div class="single-slider pos-rltv">
      <div class="slider-img"><img src="/client/images/slider/slider02.jpg" alt=""></div>
      <div class="slider-content pos-abs">
        <h4>Best Collection</h4>
        <h1 class="uppercase pos-rltv underline">exclusive Fashion 2016</h1>
        <a href="#" class="btn-def btn-white">Shop Now</a>
      </div>
    </div>
    <div class="single-slider pos-rltv">
      <div class="slider-img"><img src="/client/images/slider/slider01.jpg" alt=""></div>
      <div class="slider-content pos-abs">
        <h4>Best Collection</h4>
        <h1 class="uppercase pos-rltv underline">exclusive Fashion 2016</h1>
        <a href="#" class="btn-def btn-white">Shop Now</a>
      </div>
    </div>
  </div>
</div>
<!--slider area start-->

<!--delivery service start-->
<div class="delivery-service-area ptb-30">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="single-service shadow-box text-center">
          <img src="/client/images/icons/garantee.png" alt="">
          <h5>Đảm bảo hoàn tiền</h5>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="single-service shadow-box text-center">
          <img src="/client/images/icons/coupon.png" alt="">
          <h5>Mã giảm giá</h5>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="single-service shadow-box text-center">
          <img src="/client/images/icons/delivery.png" alt="">
          <h5>Miễn phí vận chuyển</h5>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="single-service shadow-box text-center">
          <img src="/client/images/icons/support.png" alt="">
          <h5>Hỗ trợ 24/7</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<!--delivery service start-->

<!--branding-section-area start-->
<div class="branding-section-area">
  <div class="container">
    <div class="row">
      <div class="active-slider pos-rltv carosule-pagi cp-line pagi-02">
        @foreach($new_phone as $product)
        <div class="single-slider">
          <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
            <div class="brand-img text-center">
              <img src="/client/images/product/{{$product->image}}" alt="">
            </div>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
            <div class="brand-content ptb-55">
              <div class="brand-text color-lightgrey">
                <h6>Điện thoại mới</h6>
                <a href="{{ route('detail', $product->id) }}"><h2 class="uppercase montserrat">{{$product->name}}</h2></a>
                <h3 class="montserrat">{{ number_format($product->priceSale, 0, ',', '.') }}đ <span>{{ number_format($product->price, 0, ',', '.') }}đ</span></h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <div class="social-icon-wraper mt-35">
                  <div class="social-icon">
                    <ul>
                      <li><a href="#" class="add-to-cart-btn" data-product-id="{{$product->id}}"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                      <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                      <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal" tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                      <li><a href="#"><i class="zmdi zmdi-repeat"></i></a></li>

                    </ul>
                  </div>
                </div>
              </div>
              <div class="brand-timer shadow-box-2 mt-50">
                <div class="timer-wraper text-center">
                  <div class="timer">
                    <div data-countdown="2015/02/01"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
    </div>
  </div>
</div>
<!--branding-section-area end-->

<!--new arrival area start-->
<div class="new-arrival-area pt-70">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <div class="heading-title heading-style pos-rltv mb-50 text-center">
          <h5 class="uppercase">HÀNG MỚI</h5>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="total-new-arrival new-arrival-slider-active carsoule-btn">
        @foreach($hangmoi as $hangmoi)
        <div class="col-md-3">
          <!-- single product start-->
          <div class="single-product">
            <div class="product-img">
              <div class="product-label">
                <div class="new">New</div>
              </div>
              <div class="single-prodcut-img  product-overlay pos-rltv">
                <a href="{{ route('detail', $hangmoi->id) }}"> <img alt="" src="/client/images/product/{{$hangmoi->image}}" class="primary-image"> <img alt="" src="/client/images/product/{{$hangmoi->image}}" class="secondary-image"> </a>
              </div>
              <div class="product-icon socile-icon-tooltip text-center">
                <ul>
                  <li><a href="#" class="add-to-cart-btn" data-product-id="{{$product->id}} data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                  <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                  <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                  <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="product-text">
              <div class="prodcut-name"> <a href="{{ route('detail', $hangmoi->id) }}">{{$hangmoi->name}}</a> </div>
              <div class="prodcut-ratting-price">
                <div class="prodcut-price">
                  <div class="new-price"> {{ number_format($hangmoi->priceSale, 0, ',', '.') }}đ </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single product end-->
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
<!--new arrival area end-->

<!--banner area start-->
<div class="banner-area pt-70">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="single-banner gray-bg">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="sb-img text-center">
                <img src="/client/images/banner/02.png" alt="">
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="sb-content mt-60">
                <div class="banner-text">
                  <h5 class="lato">Hàng mới</h5>
                  <h2 class="montserrat">Grag T- Shirt</h2>
                  <h3 class="montserrat">$99.99</h3>
                  <div class="banner-list">
                    <ul>
                      <li>Best quality</li>
                      <li>Best quality</li>
                      <li>Best quality</li>
                    </ul>
                  </div>
                  <div class="social-icon-wraper mt-25">
                    <div class="social-icon socile-icon-style-1">
                      <ul>
                        <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                        <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal" tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                        <li><a href="#"><i class="zmdi zmdi-repeat"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="single-banner gray-bg">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="sb-img text-center">
                <img src="/client/images/banner/01.png" alt="">
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="sb-content mt-60">
                <div class="banner-text">
                  <h5 class="lato">New Arrival</h5>
                  <h2 class="montserrat">Grag T- Shirt</h2>
                  <h3 class="montserrat">$99.99</h3>
                  <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                  <a class="btn-def btn2" href="#">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--banner area end-->

<!--discunt-featured-onsale-area start -->
<div class="discunt-featured-onsale-area pt-60">
  <div class="container">
    <div class="row">
      <div class="product-area tab-cars-style">
        <div class="title-tab-product-category">
          <div class="col-md-12 text-center">
            <ul class="nav mb-40 heading-style-2" role="tablist">
              <li role="presentation" class="active"><a href="#newarrival" aria-controls="newarrival" role="tab" data-toggle="tab">Hàng mới</a></li>
              <li role="presentation"><a href="#bestsellr" aria-controls="bestsellr" role="tab" data-toggle="tab">Bán chạy</a></li>
              <li role="presentation"><a href="#specialoffer" aria-controls="specialoffer" role="tab" data-toggle="tab">Khuyến mãi</a></li>
            </ul>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="content-tab-product-category">
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="newarrival">
              <div class="total-new-arrival new-arrival-slider-active carsoule-btn">
              @foreach($hangmoi2 as $hangmoi)
              <div class="col-md-3">
                <!-- single product start-->
                <div class="single-product">
                  <div class="product-img">
                    <div class="product-label">
                      <div class="new">New</div>
                    </div>
                    <div class="single-prodcut-img  product-overlay pos-rltv">
                      <a href="{{ route('detail', $hangmoi->id) }}"> <img alt="" src="/client/images/product/{{$hangmoi->image}}" class="primary-image"> <img alt="" src="/client/images/product/{{$hangmoi->image}}" class="secondary-image"> </a>
                    </div>
                    <div class="product-icon socile-icon-tooltip text-center">
                      <ul>
                        <li><a href="#"  class="add-to-cart-btn" data-product-id="{{$product->id}} data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                        <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                        <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="product-text">
                    <div class="prodcut-name"> <a href="{{ route('detail', $hangmoi->id) }}">{{$hangmoi->name}}</a> </div>
                    <div class="prodcut-ratting-price">
                      <div class="prodcut-price">
                        <div class="new-price"> {{ number_format($hangmoi->priceSale, 0, ',', '.') }}đ </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- single product end-->
              </div>
              @endforeach
              </div>
            </div>
            <div role="tabpanel" class="tab-pane  fade in" id="bestsellr">
              <div class="total-new-arrival new-arrival-slider-active carsoule-btn">
              @foreach($bestseller as $bestseller)
              <div class="col-md-3">
                <!-- single product start-->
                <div class="single-product">
                  <div class="product-img">
                    <div class="product-label">
                      <div class="new">Hot</div>
                    </div>
                    <div class="single-prodcut-img  product-overlay pos-rltv">
                      <a href="{{ route('detail', $bestseller->id) }}"> <img alt="" src="/client/images/product/{{$bestseller->image}}" class="primary-image"> <img alt="" src="/client/images/product/{{$bestseller->image}}" class="secondary-image"> </a>
                    </div>
                    <div class="product-icon socile-icon-tooltip text-center">
                      <ul>
                        <li><a href="#" class="add-to-cart-btn" data-product-id="{{$product->id}} data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                        <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                        <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="product-text">
                    <div class="prodcut-name"> <a href="{{ route('detail', $bestseller->id) }}">{{$bestseller->name}}</a> </div>
                    <div class="prodcut-ratting-price">
                      <div class="prodcut-price">
                        <div class="new-price"> {{ number_format($bestseller->priceSale, 0, ',', '.') }}đ </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- single product end-->
              </div>
              @endforeach
              </div>
            </div>
            <div role="tabpanel" class="tab-pane  fade in" id="specialoffer">
              <div class="total-new-arrival new-arrival-slider-active carsoule-btn">
              @foreach($promotion as $promotion)
              <div class="col-md-3">
                <!-- single product start-->
                <div class="single-product">
                  <div class="product-img">
                    <div class="product-label">
                      <div class="new">Sale</div>
                    </div>
                    <div class="single-prodcut-img  product-overlay pos-rltv">
                      <a href="{{ route('detail', $promotion->id) }}"> <img alt="" src="/client/images/product/{{$promotion->image}}" class="primary-image"> <img alt="" src="/client/images/product/{{$promotion->image}}" class="secondary-image"> </a>
                    </div>
                    <div class="product-icon socile-icon-tooltip text-center">
                      <ul>
                        <li><a href="#" class="add-to-cart-btn" data-product-id="{{$product->id}} data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                        <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                        <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="product-text">
                    <div class="prodcut-name"> <a href="{{ route('detail', $promotion->id) }}">{{$promotion->name}}</a> </div>
                    <div class="prodcut-ratting-price">
                      <div class="prodcut-price">
                        <div class="new-price"> {{ number_format($promotion->priceSale, 0, ',', '.') }}đ </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- single product end-->
              </div>
              @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--discunt-featured-onsale-area end-->

<!--testimonial-area-start-->
<div class="testimonial-area overlay ptb-70 mt-70">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <div class="heading-title color-lightgrey mb-40 text-center">
          <h5 class="uppercase">Testimonial</h5>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="total-testimonial active-slider carosule-pagi pagi-03">
          <div class="single-testimonial">
            <div class="testimonial-img">
              <img src="/client/images/team/testi-03.jpg" alt="">
            </div>
            <div class="testimonial-content color-lightgrey">
              <div class="name-degi pos-rltv">
                <h5>Anik Islam</h5>
                <p>Developer</p>
              </div>
              <div class="testi-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
              </div>
            </div>
          </div>
          <div class="single-testimonial">
            <div class="testimonial-img">
              <img src="/client/images/team/testi-02.jpg" alt="">
            </div>
            <div class="testimonial-content color-lightgrey">
              <div class="name-degi pos-rltv">
                <h5>Shakara Tasnim</h5>
                <p>Facebook Liker</p>
              </div>
              <div class="testi-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
              </div>
            </div>
          </div>
          <div class="single-testimonial">
            <div class="testimonial-img">
              <img src="/client/images/team/testi-01.jpg" alt="">
            </div>
            <div class="testimonial-content color-lightgrey">
              <div class="name-degi pos-rltv">
                <h5>Momen Buhyan</h5>
                <p>Designer</p>
              </div>
              <div class="testi-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--testimonial-area-end-->

<!--new-arrival on-sale Top-ratted area start-->
<div class="arrival-ratted-sale-area pt-70">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="heading-title heading-style pos-rltv mb-50 text-center">
          <h5 class="uppercase">Hàng mới</h5>
        </div>
        <div class="ctg-slider-active">
          <div class="single-ctg new-arrival-ctg">
            @foreach($hangmoi3 as $hangmoi)
            <div class="single-ctg-item">
              <div class="row">
                <div class="col-sm-6">
                  <div class="product-ctg-img pos-rltv product-overlay">
                    <a href="{{ route('detail', $hangmoi->id) }}"><img src="/client/images/product/{{$hangmoi->image}}" alt=""></a>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="product-ctg-content">
                    <a style="color: black;" href="{{ route('detail', $hangmoi->id) }}"><p>{{$hangmoi->name}}</p></a>
                    <p class="font-bold">{{ number_format($hangmoi->priceSale, 0, ',', '.') }}đ</p>
                    <div class="social-icon socile-icon-style-1 mt-15">
                      <ul>
                        <li><a href="#" class="add-to-cart-btn" data-product-id="{{$product->id}}><i class="zmdi zmdi-shopping-cart"></i></a></li>
                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal" tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="single-ctg on-sale-ctg">
          <div class="heading-title heading-style pos-rltv mb-50 text-center">
            <h5 class="uppercase">Đang giảm</h5>
          </div>
          <div class="ctg-slider-active">
            <div class="single-ctg new-arrival-ctg">
            @foreach($bestseller2 as $bestseller)
            <div class="single-ctg-item">
              <div class="row">
                <div class="col-sm-6">
                  <div class="product-ctg-img pos-rltv product-overlay">
                    <a href="{{ route('detail', $bestseller->id) }}"><img src="/client/images/product/{{$bestseller->image}}" alt=""></a>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="product-ctg-content">
                    <a style="color: black;" href="{{ route('detail', $bestseller->id) }}"><p>{{$bestseller->name}}</p></a>
                    <p class="font-bold">{{ number_format($bestseller->priceSale, 0, ',', '.') }}đ</p>
                    <div class="social-icon socile-icon-style-1 mt-15">
                      <ul>
                        <li><a href="#" class="add-to-cart-btn" data-product-id="{{$product->id}}><i class="zmdi zmdi-shopping-cart"></i></a></li>
                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal" tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="single-ctg top-rated-ctg">
          <div class="heading-title heading-style pos-rltv mb-50 text-center">
            <h5 class="uppercase">Bán chạy</h5>
          </div>
          <div class="ctg-slider-active">
            <div class="single-ctg new-arrival-ctg">
            @foreach($promotion2 as $promotion)
            <div class="single-ctg-item">
              <div class="row">
                <div class="col-sm-6">
                  <div class="product-ctg-img pos-rltv product-overlay">
                    <a href="{{ route('detail', $promotion->id) }}"><img src="/client/images/product/{{$promotion->image}}" alt=""></a>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="product-ctg-content">
                    <a style="color: black;" href="{{ route('detail', $promotion->id) }}"><p>{{$promotion->name}}</p></a>
                    <p class="font-bold">{{ number_format($promotion->priceSale, 0, ',', '.') }}đ</p>
                    <div class="social-icon socile-icon-style-1 mt-15">
                      <ul>
                        <li><a href="#" class="add-to-cart-btn" data-product-id="{{$product->id}}><i class="zmdi zmdi-shopping-cart"></i></a></li>
                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal" tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--new-arrival on-sale Top-ratted area end-->

<!--brand area are start-->
<div class="brand-area ptb-60">
  <div class="container">
    <div class="row">
      <div class="total-brand">
        @foreach($brand_arr as $brand)
        <div class="col-md-3">
          <div class="single-brand shadow-box"><a href="#"><img src="/client/images/brand/{{$brand->image}}" alt=""></a></div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
<!--brand area are start-->

<!--blog area are start-->
<div class="blog-area pb-70">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <div class="heading-title heading-style pos-rltv mb-50 text-center">
          <h5 class="uppercase">Blog</h5>
        </div>
      </div>
      <div class="total-blog">
        <div class="col-md-4">
          <div class="single-blog">
            <div class="blog-img pos-rltv product-overlay">
              <a href="#"><img src="/client/images/blog/01.jpg" alt=""></a>
            </div>
            <div class="blog-content">
              <div class="blog-title">
                <h5 class="uppercase font-bold"><a href="#">New fashion collection 2016</a></h5>
                <div class="like-comments-date">
                  <ul>
                    <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13 Like</a></li>
                    <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03 Comments</a></li>
                    <li class="blog-date"><a href="#"><i class="zmdi zmdi-calendar-alt"></i>16 jun 2016</a></li>
                  </ul>
                </div>
                <div class="blog-text">
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.</p>
                </div>
                <a class="read-more montserrat" href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-blog">
            <div class="blog-img pos-rltv product-overlay">
              <a href="#"><img src="/client/images/blog/02.jpg" alt=""></a>
            </div>
            <div class="blog-content">
              <div class="blog-title">
                <h5 class="uppercase font-bold"><a href="#">New fashion collection 2016</a></h5>
                <div class="like-comments-date">
                  <ul>
                    <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13 Like</a></li>
                    <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03 Comments</a></li>
                    <li class="blog-date"><a href="#"><i class="zmdi zmdi-calendar-alt"></i>16 jun 2016</a></li>
                  </ul>
                </div>
                <div class="blog-text">
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.</p>
                </div>
                <a class="read-more montserrat" href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-blog">
            <div class="blog-img pos-rltv product-overlay">
              <a href="#"><img src="/client/images/blog/03.jpg" alt=""></a>
            </div>
            <div class="blog-content">
              <div class="blog-title">
                <h5 class="uppercase font-bold"><a href="#">New fashion collection 2016</a></h5>
                <div class="like-comments-date">
                  <ul>
                    <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13 Like</a></li>
                    <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03 Comments</a></li>
                    <li class="blog-date"><a href="#"><i class="zmdi zmdi-calendar-alt"></i>16 jun 2016</a></li>
                  </ul>
                </div>
                <div class="blog-text">
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.</p>
                </div>
                <a class="read-more montserrat" href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-blog">
            <div class="blog-img pos-rltv product-overlay">
              <a href="#"><img src="/client/images/blog/01.jpg" alt=""></a>
            </div>
            <div class="blog-content">
              <div class="blog-title">
                <h5 class="uppercase font-bold"><a href="#">New fashion collection 2016</a></h5>
                <div class="like-comments-date">
                  <ul>
                    <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13 Like</a></li>
                    <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03 Comments</a></li>
                    <li class="blog-date"><a href="#"><i class="zmdi zmdi-calendar-alt"></i>16 jun 2016</a></li>
                  </ul>
                </div>
                <div class="blog-text">
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.</p>
                </div>
                <a class="read-more montserrat" href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--blog area are end-->
@endsection