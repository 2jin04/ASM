@extends('admin.layout')

@section('title')
Trang thêm danh mục
@endsection

@section('content')

<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Datatable</h4>

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
                    <h4 class="m-t-0 header-title"><b>Danh sách danh mục</b></h4>

                    <form action="{{route('cate.store')}}" method="post">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Tên</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="basic-default-name" placeholder="Apple" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Thứ tự</label>
                                <div class="col-sm-10">
                                    <input type="text" name="thuTu" min="1" class="form-control" id="basic-default-company" placeholder="7" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Ẩn hiện</label>
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