@extends('admin.layout')

@section('title')
Trang danh mục
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
                            @foreach ($cate_arr as $cate)
                            <tr>
                                <td><strong>{{$cate->name}}</strong></td>
                                <td class="text-center">{{$cate->thuTu}}</td>
                                <td class="text-center">{{$cate->anHien==1? "Đang hiện":"Đang ẩn"}}</td>
                                <td class="text-center">
                                    <a class="btn btn-outline-info btn-sm" href="{{url('admin/cate/'.$cate->id.'/edit')}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <!-- <a class="btn btn-danger btn-sm" href="" onclick="return confirm('Bạn có muốm xóa không')"><i class="bx bx-trash me-1"></i> Delete</a> -->
                                    <form class="d-inline" action="{{route('cate.destroy', $cate->id)}}" method="POST">
                                        @csrf  @method('DELETE')
                                        <button type='submit' onclick="return confirm('Bạn muốn xóa à')" 
                                        class="btn btn-danger btn-sm ms-1" ><i class="bx bx-trash me-1"></i> Xóa</button>
                                    </form>
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