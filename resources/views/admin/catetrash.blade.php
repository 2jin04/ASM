@extends('admin.layout')

@section('title')
Thùng rác danh mục
@endsection

@section('content')

<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Thùng rác danh mục</h4>

                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">admim</a></li>
                        <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
                        <li class="breadcrumb-item active">Thùng rác</li>
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

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Tên</th>
                                <th class="text-center">Thứ tự</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($catetrash_arr as $catetrash)
                            <tr>
                                <td><strong>{{$catetrash->name}}</strong></td>
                                <td class="text-center">{{$catetrash->thuTu}}</td>
                                <td class="text-center">{{$catetrash->anHien==1? "Đang hiện":"Đang ẩn"}}</td>
                                <td class="text-center">
                                    <a class="btn btn-outline-info btn-sm" href="catetrash/restore/{{ $catetrash->id }}"><i class="bx bx-edit-alt me-1"></i> Khôi phục</a>
                                    <a class="btn btn-danger btn-sm" href="catetrash/delete/{{$catetrash->id}}" onclick="return confirm('Bạn có muốm xóa vĩnh viễn không')"><i class="bx bx-trash me-1"></i> Xóa vĩnh viễn</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end row -->

    </div> <!-- container -->

</div>

@endsection