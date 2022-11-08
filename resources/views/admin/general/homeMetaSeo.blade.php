@extends('admin')
@section('main')
<?php
$meta_title = $meta_desc = $meta_keywords = '';
if ($listMeta->count() > 0) {
    $meta_desc = $listMeta[0]['meta_desc'];
    $meta_keywords = $listMeta[0]['meta_keywords'];
    $meta_title = $listMeta[0]['meta_title'];
}
?>
    <?php
                $message = Session::get('message');
                $data = [
                    [
                        'mess' => 'success_add',
                        'class' => 'alert-success',
                        'status' => 'Successfully!',
                        'value' => 'Thêm Meta Seo thành công.'
                    ],
                    [
                        'mess' => 'fail_add',
                        'class' => 'alert-danger',
                        'status' => 'Error!',
                        'value' => 'Đã xảy ra lỗi khi thêm  Meta Seo .'
                    ],
                    [
                        'mess' => 'success_edit',
                        'class' => 'alert-success',
                        'status' => 'Successfully!',
                        'value' => 'Cập nhật  Meta Seo  thành công.'
                    ],
                    [
                        'mess' => 'fail_edit',
                        'class' => 'alert-danger',
                        'status' => 'Error!',
                        'value' => 'Đã xảy ra lỗi khi cập nhật  Meta Seo .'
                    ],
                    [
                        'mess' => 'success_delete',
                        'class' => 'alert-success',
                        'status' => 'Successfully!',
                        'value' => 'Đã xóa 1  Meta Seo .'
                    ],
                    [
                        'mess' => 'fail_delete',
                        'class' => 'alert-danger',
                        'status' => 'Error!',
                        'value' => 'Đã xảy ra lỗi khi xóa 1  Meta Seo .'
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
<div class="page-content">
    <div class="row page-left">
        <!-- info ganeral -->
        <a href="{{URL::to('/home-quan-li-thong-tin-chung')}}">
            <div class="head-title header-setting">
                1. Thông tin chung

            </div>
        </a>
        <!-- banner main -->
        <a href="{{URL::to('/home-quan-li-banner')}}">
            <div class="header-setting head-title">
                2. Home banner
            </div>
        </a>

        <a href="{{URL::to('/home-quan-li-nha-dau-tu')}}">
            <div class="header-setting active head-title">
                3. Chủ đầu tư
            </div>
        </a>

        <a href="{{URL::to('/home-quan-li-thuong-hieu')}}">
            <div class="header-setting  head-title">
                4. Thương hiệu
            </div>
        </a>
        <a href="{{URL::to('/home-quan-li-meta-seo')}}">
            <div class="header-setting head-title">
                5. Meta SEO
            </div>
        </a>
    </div>


                
                <div class="page-right">
        <div class="content-setting ">
            <div class="panel panel-primary">
                <form action="{{URL::to('/save-ganeral-meta')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="panel-body">
                        <div class="form-group col-lg-12 ">
                            <label>Meta Desc</label>
                            <input required="" value="<?= $meta_desc ?>" type="text" id="meta_desc" name="meta_desc" class="form-control" 
                            placeholder="Meta Desc...">
                        </div>
                        <div class="form-group col-xs-12">
                            <label>Meta Keywords</label>
                            <input required value="<?= $meta_keywords ?>" type="text" name="meta_keywords" id="meta_keywords" class="form-control " 
                            placeholder="Meta Keywords...">
                        </div>
                        <div class="form-group  col-xs-12">
                            <label>Meta Title</label>
                            <input type="text" value="<?= $meta_title ?>" name="meta_title" id="meta_title" class="form-control" 
                            placeholder="Meta Title...">
                        </div>
                       
                        <div class="input-submit-setting">
                            <input type="submit" name="submit" value="Cập nhật" class="col-xs-6 btn btn-primary setting-submit btn-update">

                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>
            
</div>
@endsection()