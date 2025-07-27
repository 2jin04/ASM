@extends('admin.layout')

@section('title')
Trang thêm sản phẩm
@endsection

@section('content')

<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Thêm sản phẩm</h4>

                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item active">Datatable</li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">

                    <form action="{{route('product.store')}}" method="post">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Tên sản phẩm</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="basic-default-name" placeholder="Apple 15 Pro Max" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Hình ảnh</label>
                            <div class="col-sm-10">
                                <input type="text" name="image" class="form-control" id="basic-default-company" placeholder="apple1.png" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Ngày đăng</label>
                            <div class="col-sm-10">
                                <input type="date" name="dateSubmitted" class="form-control" id="basic-default-company" placeholder="apple1.png" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Giá</label>
                            <div class="col-sm-10">
                                <input type="number" name="price" class="form-control" id="basic-default-company" placeholder="19000000" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Giá khuyến mãi</label>
                            <div class="col-sm-10">
                                <input type="number" name="priceSale" class="form-control" id="basic-default-company" placeholder="15000000" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Số lượng</label>
                            <div class="col-sm-10">
                                <input type="number" name="quantity" class="form-control" id="basic-default-company" placeholder="10000" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Trạng thái</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline mt-3">
                                    <input class="form-check-input" type="radio" name="anHien" id="inlineRadio1" value="0" />
                                    <label class="form-check-label" for="inlineRadio1">Ẩn</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="anHien" id="inlineRadio2" value="1" checked />
                                    <label class="form-check-label" for="inlineRadio2">Hiện</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Hot</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline mt-3">
                                    <input class="form-check-input" type="radio" name="hot" id="inlineRadio1" value="0" />
                                    <label class="form-check-label" for="inlineRadio1">Bình thường</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hot" id="inlineRadio2" value="1" checked />
                                    <label class="form-check-label" for="inlineRadio2">Nổi bật</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Loại tin</label>
                            <div class="col-sm-10">
                                <select class="custom-select" name="idLT" id="exampleFormControlSelect1" aria-label="Default select example">
                                    @foreach($cate_arr as $cate)
                                    <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Mô tả</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="describe" placeholder="..." rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Thêm</button>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div> <!-- end row -->

    </div> <!-- container -->

</div>

@endsection