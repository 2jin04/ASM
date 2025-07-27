@extends('admin.layout')

@section('title')
Quản trị sản phẩm
@endsection

@section('content')

<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Danh sách sản phẩm</h4>

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
                    <div class="form-group row">
                        <div class="col-2">
                            <select class="form-control" onchange="locsp(this.value)">
                                <option value="-1">Lọc theo NSX</option>
                                @foreach ($cate_arr as $cate)
                                <option value="{{$cate->id}}" {{$cate->id == $idCategory? "selected":""}}>{{$cate->name}}</option>
                                @endforeach
                            </select>
                            <script>
                                function locsp(idCategory) {
                                    document.location = `/admin/protrash?idCategory=${idCategory}`;
                                }
                            </script>
                        </div>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th class="text-center">Giá</th>
                                <th class="text-center">Ngày đăng</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($protrash_arr as $protrash)
                            <tr>
                                <td class="text-center"><img src="/client/images/product/{{$protrash->image}}" height="80"></td>
                                <td><strong>{{$protrash->name}}</strong></td>
                                <td class="text-center">Giá:{{ number_format($protrash->price,0,',', '.') }} <br>
                                    KM : {{ number_format($protrash->priceSale,0,',', '.') }}</td>
                                <td class="text-center">{{date('d/m/ Y',strtotime($protrash->dateSubmitted))}}</td>
                                <td class="text-center">Ẩn hiện: {{($protrash->anHien==0)? "Đang ẩn":"Đang hiện"}} <br>
                                    Nổi bật: {{($protrash->hot==0)? "Bình thường":"Nổi bật"}} </td>
                                <td class="text-center">
                                    <a class="btn btn-outline-info btn-sm" href="protrash/restore/{{ $protrash->id }}"><i class="bx bx-edit-alt me-1"></i> Khôi phục</a>
                                    <a class="btn btn-danger btn-sm" href="protrash/delete/{{$protrash->id}}" onclick="return confirm('Bạn có muốm xóa vĩnh viễn không')"><i class="bx bx-trash me-1"></i> Xóa vĩnh viễn</a>
                                    <!-- <form class="d-inline" action="{{route('product.destroy', $protrash->id)}}" method="POST">
                                        @csrf @method('DELETE')
                                        <button type='submit' onclick="return confirm('Bạn muốn xóa à')" class="btn btn-danger btn-sm ms-1"><i class="bx bx-trash me-1"></i> Xóa</button>
                                    </form> -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center m-5">{{ $protrash_arr->links() }} </div>
                </div>
            </div>
        </div> <!-- end row -->

    </div> <!-- container -->

</div>

@endsection