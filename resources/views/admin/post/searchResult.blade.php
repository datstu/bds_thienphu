@extends('admin')
@section('main')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Quản lý sản phẩm</h1>
    </div>

</div>
<!--/.row-->
<style>
    .them-anh-lea-a {
        margin: 5px;
        background: green;
        border: 0;
    }
</style>
<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
        <?php

        $message = Session::get('message');

        $data = [
            [
                'mess' => 'success_add',
                'class' => 'alert-success',
                'status' => 'Successfully!',
                'value' => 'Thêm sản phẩm thành công.'
            ],
            [
                'mess' => 'fail_add',
                'class' => 'alert-danger',
                'status' => 'Error!',
                'value' => 'Đã xảy ra lỗi khi thêm sản phẩm.'
            ],
            [
                'mess' => 'success_edit',
                'class' => 'alert-success',
                'status' => 'Successfully!',
                'value' => 'Cập nhật sản phẩm thành công.'
            ],
            [
                'mess' => 'fail_edit',
                'class' => 'alert-danger',
                'status' => 'Error!',
                'value' => 'Đã xảy ra lỗi khi cập nhật sản phẩm.'
            ],
            [
                'mess' => 'success_delete',
                'class' => 'alert-success',
                'status' => 'Successfully!',
                'value' => 'Đã xóa 1 sản phẩm.'
            ],
            [
                'mess' => 'fail_delete',
                'class' => 'alert-danger',
                'status' => 'Error!',
                'value' => 'Đã xảy ra lỗi khi xóa 1 sản phẩm.'
            ]
        ];
        ?>

        @foreach ($data as $value)
        @if( $message == $value['mess'])
        <div class="alert {{$value['class']}}">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{$value['status']}}</strong> {{$value['value']}}
        </div>
        <?php Session::put('message', null); ?>
        @endif
        @endforeach

        <div class="panel panel-primary">
            <div class="panel-heading search-admin">Quản lý Bài viết
                <form action="{{URL::to('/tim-bai-viet')}}" method="get">
                    <input name ="search" placeholder="abc..." class="color-gray " type="text">
                    <button>Tìm</button>
                </form>
                <span>Tìm thấy {{count($listProduct)}} Bài viết</span>
            </div>

            <div class="panel-body">
                <div class="bootstrap-table">
                    <div class="table-responsive">
                        <a href="{{URL::to('/them-bai-viet')}}" class="btn btn-primary">Thêm Bài viết</a>
                        <table class="table table-bordered" style="margin-top:20px;">
                            <thead>
                                <tr class="bg-primary">
                                    <th>ID</th>
                                    <th  >Tên bài viết</th>
                                   
                                    <th>Mô tả ngắn</th>
                                    <th>Hiển thị</th>
                                    <th width="200">Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($listProduct as $key => $product)
                                <tr>
                                    <td>{{$product->post_id}}</td>
                                    <td>{{$product->post_title}}</td>

                                    <td><?php echo $product->post_desc;?></td>
                                    
                                    <td>
                                        @if($product->status == 1)
                                        Hiển thị
                                        @else
                                        Ẩn
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{URL::to('/cap-nhat-bai-viet-'.$product->post_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                        <a onclick="return confirm('Bạn muốn xóa bài viết {{$product->post_title}}?')" href="{{URL::to('/xoa-bai-viet-'.$product->post_id )}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"></div>
                {{$listProduct->links()}}
            </div>
        </div>
    </div>
</div>
@endsection()