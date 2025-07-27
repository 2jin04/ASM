@extends('client.layout')

@section('title')
Danh sách sản phẩm
@endsection

@section('content')

<!--breadcumb area start -->
<div class="breadcumb-area breadcumb-2 overlay pos-rltv">
  <div class="bread-main">
    <div class="bred-hading text-center">
      <h5>{{$categoryName}}</h5>
    </div>
    <ol class="breadcrumb">
      <li class="home"><a title="Go to Home Page" href="{{ url('/') }}">Trang chủ</a></li>
      <li class="active">Sản phẩm</li>
    </ol>
  </div>
</div>
<!--breadcumb area end -->

<!--shop main area are start-->
<div class="shop-main-area ptb-70">
  <div class="container">
    <div class="row">
      <!--shop sidebar start-->
      <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="row">
          <div class="shop-sidebar">
            <!--single aside start-->
            <aside class="single-aside search-aside search-box">
              <form action="#">
                <div class="input-box">
                  <input class="single-input" placeholder="Search...." type="text">
                  <button class="src-btn sb-2"><i class="fa fa-search"></i></button>
                </div>
              </form>
            </aside>
            <!--single aside end-->

            <!--single aside start-->
            <aside class="single-aside catagories-aside">
              <div class="heading-title aside-title pos-rltv">
                <h5 class="uppercase">Hãng điện thoại</h5>
              </div>
              <div id="cat-treeview" class="product-cat">
                <ul>
                  <li class="closed"><a href="{{ route('products') }}">Tất cả</a></li>
                  @foreach ($cate_arr as $category)
                  <li class="closed"><a href="{{ route('products', ['idCata' => $category->id]) }}">{{$category->name}}</a></li>
                  @endforeach
                </ul>
              </div>
            </aside>
            <!--single aside end-->

            <!--single aside start-->
            <aside class="single-aside price-aside fix">
              <div class="heading-title aside-title pos-rltv">
                <h5 class="uppercase">Giá</h5>
              </div>
              <div class="price_filter">
                <div id="slider-range"></div>
                <div class="price_slider_amount">
                  <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                  <input type="submit" value="Filter" />
                </div>
              </div>
            </aside>
            <!--single aside end-->

            <!--single aside start-->
            <aside class="single-aside color-aside">
              <div class="heading-title aside-title pos-rltv">
                <h5 class="uppercase">Màu</h5>
              </div>
              <ul class="color-filter mt-30">
                <li><a href="#" class="color-1"></a></li>
                <li><a href="#" class="color-2 active"></a></li>
                <li><a href="#" class="color-3"></a></li>
                <li><a href="#" class="color-4"></a></li>
                <li><a href="#" class="color-5"></a></li>
                <li><a href="#" class="color-6"></a></li>
                <li><a href="#" class="color-7"></a></li>
                <li><a href="#" class="color-8"></a></li>
                <li><a href="#" class="color-9"></a></li>
              </ul>
            </aside>
            <!--single aside end-->

            <!--single aside start-->
            <aside class="single-aside size-aside">
              <div class="heading-title aside-title pos-rltv">
                <h5 class="uppercase">Size Option</h5>
              </div>
              <ul class="size-filter mt-30">
                <li><a href="#" class="size-s">S</a></li>
                <li><a href="#" class="size-m">M</a></li>
                <li><a href="#" class="size-l">L</a></li>
                <li><a href="#" class="size-xl">XL</a></li>
                <li><a href="#" class="size-xxl">XXL</a></li>
              </ul>
            </aside>

            <!--single aside start-->
            <aside class="single-aside tag-aside">
              <div class="heading-title aside-title pos-rltv">
                <h5 class="uppercase">Product Tags</h5>
              </div>
              <ul class="tag-filter mt-30">
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Women</a></li>
                <li><a href="#">Winter</a></li>
                <li><a href="#">Street Style</a></li>
                <li><a href="#">Style</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Collection</a></li>
                <li><a href="#">Spring 2016</a></li>
              </ul>
            </aside>
            <!--single aside end-->

            <!--single aside start-->
            <aside class="single-aside product-aside">
              <div class="heading-title aside-title pos-rltv">
                <h5 class="uppercase">Recent Product</h5>
              </div>
              <div class="recent-prodcut-wraper total-rectnt-slider">
                <div class="single-rectnt-slider">
                  <!-- single product start-->
                  <div class="single-product recent-single-product">
                    <div class="product-img">
                      <div class="single-prodcut-img  product-overlay pos-rltv">
                        <a href="single-product.html"> <img alt="" src="/client/images/product/rp01.jpg" class="primary-image"> <img alt="" src="/client/images/product/rp02.jpg" class="secondary-image"> </a>
                      </div>
                    </div>
                    <div class="product-text">
                      <div class="prodcut-name"> <a href="single-product.html">Copenhagen Spitfire Chair</a> </div>
                      <div class="prodcut-ratting-price">
                        <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star-o"></i></a> </div>
                        <div class="prodcut-price">
                          <div class="new-price"> $220 </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- single product end-->

                  <!-- single product start-->
                  <div class="single-product recent-single-product">
                    <div class="product-img">
                      <div class="single-prodcut-img  product-overlay pos-rltv">
                        <a href="single-product.html"> <img alt="" src="/client/images/product/rp03.jpg" class="primary-image"> <img alt="" src="/client/images/product/rp04.jpg" class="secondary-image"> </a>
                      </div>
                    </div>
                    <div class="product-text">
                      <div class="prodcut-name"> <a href="single-product.html">Copenhagen Spitfire Chair</a> </div>
                      <div class="prodcut-ratting-price">
                        <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star-o"></i></a> </div>
                        <div class="prodcut-price">
                          <div class="new-price"> $220 </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- single product end-->

                  <!-- single product start-->
                  <div class="single-product recent-single-product">
                    <div class="product-img">
                      <div class="single-prodcut-img  product-overlay pos-rltv">
                        <a href="single-product.html"> <img alt="" src="/client/images/product/rp02.jpg" class="primary-image"> <img alt="" src="/client/images/product/rp03.jpg" class="secondary-image"> </a>
                      </div>
                    </div>
                    <div class="product-text">
                      <div class="prodcut-name"> <a href="single-product.html">Copenhagen Spitfire Chair</a> </div>
                      <div class="prodcut-ratting-price">
                        <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star-o"></i></a> </div>
                        <div class="prodcut-price">
                          <div class="new-price"> $220 </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- single product end-->

                  <!-- single product start-->
                  <div class="single-product recent-single-product">
                    <div class="product-img">
                      <div class="single-prodcut-img  product-overlay pos-rltv">
                        <a href="single-product.html"> <img alt="" src="/client/images/product/rp04.jpg" class="primary-image"> <img alt="" src="/client/images/product/rp01.jpg" class="secondary-image"> </a>
                      </div>
                    </div>
                    <div class="product-text">
                      <div class="prodcut-name"> <a href="single-product.html">Copenhagen Spitfire Chair</a> </div>
                      <div class="prodcut-ratting-price">
                        <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star-o"></i></a> </div>
                        <div class="prodcut-price">
                          <div class="new-price"> $220 </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- single product end-->
                </div>
                <div class="single-rectnt-slider">
                  <!-- single product start-->
                  <div class="single-product recent-single-product">
                    <div class="product-img">
                      <div class="single-prodcut-img  product-overlay pos-rltv">
                        <a href="single-product.html"> <img alt="" src="/client/images/product/rp01.jpg" class="primary-image"> <img alt="" src="/client/images/product/rp02.jpg" class="secondary-image"> </a>
                      </div>
                    </div>
                    <div class="product-text">
                      <div class="prodcut-name"> <a href="single-product.html">Copenhagen Spitfire Chair</a> </div>
                      <div class="prodcut-ratting-price">
                        <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star-o"></i></a> </div>
                        <div class="prodcut-price">
                          <div class="new-price"> $220 </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- single product end-->

                  <!-- single product start-->
                  <div class="single-product recent-single-product">
                    <div class="product-img">
                      <div class="single-prodcut-img  product-overlay pos-rltv">
                        <a href="single-product.html"> <img alt="" src="/client/images/product/rp03.jpg" class="primary-image"> <img alt="" src="/client/images/product/rp04.jpg" class="secondary-image"> </a>
                      </div>
                    </div>
                    <div class="product-text">
                      <div class="prodcut-name"> <a href="single-product.html">Copenhagen Spitfire Chair</a> </div>
                      <div class="prodcut-ratting-price">
                        <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star-o"></i></a> </div>
                        <div class="prodcut-price">
                          <div class="new-price"> $220 </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- single product end-->

                  <!-- single product start-->
                  <div class="single-product recent-single-product">
                    <div class="product-img">
                      <div class="single-prodcut-img  product-overlay pos-rltv">
                        <a href="single-product.html"> <img alt="" src="/client/images/product/rp02.jpg" class="primary-image"> <img alt="" src="/client/images/product/rp03.jpg" class="secondary-image"> </a>
                      </div>
                    </div>
                    <div class="product-text">
                      <div class="prodcut-name"> <a href="single-product.html">Copenhagen Spitfire Chair</a> </div>
                      <div class="prodcut-ratting-price">
                        <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star-o"></i></a> </div>
                        <div class="prodcut-price">
                          <div class="new-price"> $220 </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- single product end-->

                  <!-- single product start-->
                  <div class="single-product recent-single-product">
                    <div class="product-img">
                      <div class="single-prodcut-img  product-overlay pos-rltv">
                        <a href="single-product.html"> <img alt="" src="/client/images/product/rp04.jpg" class="primary-image"> <img alt="" src="/client/images/product/rp01.jpg" class="secondary-image"> </a>
                      </div>
                    </div>
                    <div class="product-text">
                      <div class="prodcut-name"> <a href="single-product.html">Copenhagen Spitfire Chair</a> </div>
                      <div class="prodcut-ratting-price">
                        <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star-o"></i></a> </div>
                        <div class="prodcut-price">
                          <div class="new-price"> $220 </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- single product end-->
                </div>
              </div>

            </aside>
            <!--single aside end-->

            <!--single aside start-->
            <aside class="single-aside add-aside">
              <a href="single-product.html"><img src="/client/images/banner/add.jpg" alt=""></a>
            </aside>
            <!--single aside end-->
          </div>
        </div>
      </div>
      <!--shop sidebar end-->

      <!--main-shop-product start-->
      <div class="col-md-9 col-sm-8 col-xs-12">
        <div class="shop-wraper">
          <div class="col-xs-12">
            <div class="shop-area-top">
              <div class="row">
                <div class="col-lg-6 col-md-9 col-sm-9 col-xs-12">
                  <div class="sort product-show">
                    <label>Hiển thị</label>
                    <select id="input-amount">
                      <option value="volvo">10</option>
                      <option value="saab">15</option>
                      <option value="vw">20</option>
                      <option value="audi" selected>25</option>
                    </select>
                  </div>
                  <div class="sort product-type">
                    <label>Sắp xếp</label>
                    <select id="input-sort">
                      <option value="#" selected>Mặc định</option>
                      <option value="#">Name (A - Z)</option>
                      <option value="#">Name (Z - A)</option>
                      <option value="#">Price (Low &gt; High)</option>
                      <option value="#">Price (High &gt; Low)</option>
                      <option value="#">Rating (Highest)</option>
                      <option value="#">Rating (Lowest)</option>
                      <option value="#">Model (A - Z)</option>
                      <option value="#">Model (Z - A)</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <div class="list-grid-view text-center">
                    <ul class="nav" role="tablist">
                      <li role="presentation" class="active"><a href="#grid" aria-controls="grid" role="tab" data-toggle="tab"><i class="zmdi zmdi-widgets"></i></a></li>
                      <li role="presentation"><a href="#list" aria-controls="list" role="tab" data-toggle="tab"><i class="zmdi zmdi-view-list-alt"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-3 hidden-md hidden-sm hidden-xs">
                  <div class="total-showing text-right">
                    Đang hiển thị - <span>10</span> đến <span>18</span> trong số <span>36</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="shop-total-product-area clearfix mt-35">
            <!-- Tab panes -->
            <div class="tab-content">
              <!--tab grid are start-->
              <div role="tabpanel" class="tab-pane fade in active" id="grid">
                <div class="total-shop-product-grid">
                  @foreach($products as $product)
                  <div class="col-md-4 col-sm-6 item">
                    <!-- single product start-->
                    <div class="single-product">
                      <div class="product-img">
                        <div class="product-label red">
                          <div class="new">New</div>
                        </div>
                        <div class="single-prodcut-img  product-overlay pos-rltv">
                          <a href="{{ url('/detail', [$product->id]) }}"> <img alt="" src="/client/images/product/{{$product->image}}" class="primary-image"> <img alt="" src="/client/images/product/{{$product->image}}" class="secondary-image"> </a>
                        </div>
                        <div class="product-icon socile-icon-tooltip text-center">
                          <ul>
                            <li><a href="/addcart/{{$product->id}}" data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                            <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                            <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                            <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="product-text">
                        <div class="prodcut-name"> <a href="single-product.html">{{$product->name}}</a> </div>
                        <div class="prodcut-ratting-price">
                          <div class="prodcut-price">
                            <div class="new-price"> {{ number_format($product->priceSale, 0, ',', '.') }}đ </div>
                            <div class="old-price"> <del>{{ number_format($product->priceSale, 0, ',', '.') }}đ</del> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- single product end-->
                  </div>
                  @endforeach
                </div>
              </div>
              <!--shop grid are end-->

              <!--shop product list start-->
              <div role="tabpanel" class="tab-pane  fade in" id="list">
                <div class="total-shop-product-list">
                  <div class="col-md-12 item">
                    <!-- single product start-->
                    <div class="single-product single-product-list">
                      <div class="product-img">
                        <div class="product-label red">
                          <div class="new">Sale</div>
                        </div>
                        <div class="single-prodcut-img  product-overlay pos-rltv">
                          <a href="single-product.html"> <img alt="" src="/client/images/product/02.jpg" class="primary-image"> <img alt="" src="/client/images/product/03.jpg" class="secondary-image"> </a>
                        </div>
                      </div>
                      <div class="product-text prodcut-text-list fix">
                        <div class="prodcut-name list-name montserrat"> <a href="single-product.html">Magnetic Force Bralette</a> </div>
                        <div class="prodcut-ratting-price">
                          <div class="prodcut-ratting list-ratting">
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                          </div>
                          <div class="prodcut-price list-price">
                            <div class="new-price"> $220 </div>
                            <div class="old-price"> <del>$250</del> </div>
                          </div>
                        </div>
                        <div class="list-product-content">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dolor tellus, bibendum eu lacus ids suscipit
                            blandit tortor. Aenean eget posuere augue, vel molestie turpis. Ut tempor mauris ut justo luctus aliquam. Nullam
                            id quam vitae odio scelerisque ultrices.</p>
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
                    <!-- single product end-->
                  </div>
                  <div class="col-md-12 item">
                    <!-- single product start-->
                    <div class="single-product single-product-list">
                      <div class="product-img">
                        <div class="single-prodcut-img  product-overlay pos-rltv">
                          <a href="single-product.html"> <img alt="" src="/client/images/product/03.jpg" class="primary-image"> <img alt="" src="/client/images/product/04.jpg" class="secondary-image"> </a>
                        </div>
                      </div>
                      <div class="product-text prodcut-text-list fix">
                        <div class="prodcut-name list-name montserrat"> <a href="single-product.html">Magnetic Force Bralette</a> </div>
                        <div class="prodcut-ratting-price">
                          <div class="prodcut-ratting list-ratting">
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                          </div>
                          <div class="prodcut-price list-price">
                            <div class="new-price"> $220 </div>
                          </div>
                        </div>
                        <div class="list-product-content">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dolor tellus, bibendum eu lacus ids suscipit
                            blandit tortor. Aenean eget posuere augue, vel molestie turpis. Ut tempor mauris ut justo luctus aliquam. Nullam
                            id quam vitae odio scelerisque ultrices.</p>
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
                    <!-- single product end-->
                  </div>
                  <div class="col-md-12 item">
                    <!-- single product start-->
                    <div class="single-product single-product-list">
                      <div class="product-img">
                        <div class="single-prodcut-img  product-overlay pos-rltv">
                          <a href="single-product.html"> <img alt="" src="/client/images/product/05.jpg" class="primary-image"> <img alt="" src="/client/images/product/06.jpg" class="secondary-image"> </a>
                        </div>
                      </div>
                      <div class="product-text prodcut-text-list fix">
                        <div class="prodcut-name list-name montserrat"> <a href="single-product.html">Magnetic Force Bralette</a> </div>
                        <div class="prodcut-ratting-price">
                          <div class="prodcut-ratting list-ratting">
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                          </div>
                          <div class="prodcut-price list-price">
                            <div class="new-price"> $200 </div>
                            <div class="old-price"> <del>$300</del> </div>
                          </div>
                        </div>
                        <div class="list-product-content">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dolor tellus, bibendum eu lacus ids suscipit
                            blandit tortor. Aenean eget posuere augue, vel molestie turpis. Ut tempor mauris ut justo luctus aliquam. Nullam
                            id quam vitae odio scelerisque ultrices.</p>
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
                    <!-- single product end-->
                  </div>
                  <div class="col-md-12 hidden-sm item">
                    <!-- single product start-->
                    <div class="single-product single-product-list">
                      <div class="product-img">
                        <div class="single-prodcut-img  product-overlay pos-rltv">
                          <a href="single-product.html"> <img alt="" src="/client/images/product/04.jpg" class="primary-image"> <img alt="" src="/client/images/product/05.jpg" class="secondary-image"> </a>
                        </div>
                      </div>
                      <div class="product-text prodcut-text-list fix">
                        <div class="prodcut-name list-name montserrat"> <a href="single-product.html">Magnetic Force Bralette</a> </div>
                        <div class="prodcut-ratting-price">
                          <div class="prodcut-ratting list-ratting">
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                          </div>
                          <div class="prodcut-price list-price">
                            <div class="new-price"> $220 </div>
                          </div>
                        </div>
                        <div class="list-product-content">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dolor tellus, bibendum eu lacus ids suscipit
                            blandit tortor. Aenean eget posuere augue, vel molestie turpis. Ut tempor mauris ut justo luctus aliquam. Nullam
                            id quam vitae odio scelerisque ultrices.</p>
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
                    <!-- single product end-->
                  </div>
                  <div class="col-md-12 hidden-sm item">
                    <!-- single product start-->
                    <div class="single-product single-product-list">
                      <div class="product-img">
                        <div class="single-prodcut-img  product-overlay pos-rltv">
                          <a href="single-product.html"> <img alt="" src="/client/images/product/05.jpg" class="primary-image"> <img alt="" src="/client/images/product/06.jpg" class="secondary-image"> </a>
                        </div>
                      </div>
                      <div class="product-text prodcut-text-list fix">
                        <div class="prodcut-name list-name montserrat"> <a href="single-product.html">Magnetic Force Bralette</a> </div>
                        <div class="prodcut-ratting-price">
                          <div class="prodcut-ratting list-ratting">
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                          </div>
                          <div class="prodcut-price list-price">
                            <div class="new-price"> $200 </div>
                            <div class="old-price"> <del>$300</del> </div>
                          </div>
                        </div>
                        <div class="list-product-content">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dolor tellus, bibendum eu lacus ids suscipit
                            blandit tortor. Aenean eget posuere augue, vel molestie turpis. Ut tempor mauris ut justo luctus aliquam. Nullam
                            id quam vitae odio scelerisque ultrices.</p>
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
                    <!-- single product end-->
                  </div>
                </div>
              </div>
              <!--shop product list end-->
              <!--pagination start-->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="pagination-btn text-center">
                  {{ $products->links() }}
                </div>
              </div>
              <!--pagination end-->
            </div>
          </div>
        </div>
      </div>
      <!--main-shop-product start-->
    </div>
  </div>
</div>
<!--shop main area are end-->
@endsection