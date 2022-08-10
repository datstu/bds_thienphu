@extends('admin')
@section('main')

<style>
    .display_block {
        width: 100%;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Quản lý danh mục</h1>
    </div>

</div>
<!--/.row-->
<div class="row">
    <div class="col-xs-12 col-md-8 col-lg-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Thêm danh mục
            </div>
            <form action="{{URL::to('/save-category')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                @if(isset($categoryById) )
                <?php
                $checkFlagship = (((int)$categoryById->flagship) == 1) ? 1 : 0; ?>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Sản phẩm chủ lực:</label>
                        <div class="check-flagship">
                            <input value="{{$checkFlagship}}" <?php echo ($checkFlagship == 1) ? 'checked' : ''; ?> type="checkbox" id="flagship" name="flagship">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Icon SVG</label>
                        <input id="img" type="file" name="icon_svg" class="form-control hidden" onchange="changeImgSvg(this)">
                        <img id="avatar" class="thumbnail" width="100" @if(empty($categoryById->icon_svg))

                        src="{{asset('public/backend/img/new_seo-10-512.png')}}">
                        @else
                        src="{{asset('public/uploads/category/'.$categoryById->icon_svg)}}">

                        @endif


                    </div>
                    <div class="form-group">
                        <label>Tên danh mục:</label>
                        <input value="{{$categoryById->category_name}}" id="title" onkeyup="ChangeToSlug();" type="text" name="nameCategory" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Slug URL:</label>
                        <input required value="{{$categoryById->slug}}" id="slug" type="text" name="slug" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Miêu tả</label>
                        <textarea rows=8 class="display_block" id="slug" name="descCategory">{{$categoryById->category_desc}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Từ khóa tìm kiếm</label>
                        <textarea rows=8 class="display_block" name="category_keywords">{{$categoryById->meta_keywords}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Banner cho danh mục</label>
                        <input id="img" type="file" name="imgCategory" class="form-control hidden" onchange="changeImg(this)">
                        <img id="avatar" class="thumbnail" width="100" @if(empty($categoryById->category_image))

                        src="{{asset('public/backend/img/new_seo-10-512.png')}}">
                        @else
                        src="{{asset('public/uploads/category/'.$categoryById->category_image)}}">

                        @endif


                    </div>
                    <div class="form-group">
                        <label>Set Menu</label>
                        <br>
                        <?php $display = json_decode($categoryById->display_menu, true); ?>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="show[]" <?php if (in_array(1, (array)$display)) echo 'checked'; ?> value="1">Dự án
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="show[]" <?php if (in_array(2, (array)$display)) echo 'checked'; ?> value="2">Tin tức
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Hiển thị</label>
                        <select name="statusCategory" class="form-control">
                            @if($categoryById->category_status == 1)
                            <option selected value="1">Hiện</option>
                            <option value="0">Ẩn</option>
                            @else
                            <option value="1">Hiện</option>
                            <option selected value="0">Ẩn</option>
                            @endif
                        </select>
                    </div>
                    <input type="hidden" name="id" value="{{$categoryById->category_id }}" class="btn btn-primary">
                    <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
                    @else
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Sản phẩm chủ lực:</label>
                            <input value="1" type="checkbox" name="flagship" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Icon SVG</label>
                            <input id="img" type="file" name="icon_svg" class="form-control hidden" onchange="changeImgSvg(this)">
                            <img id="avatar" class="thumbnail" width="100" src="{{asset('public/backend/img/new_seo-10-512.png')}}">
                        </div>
                        <div class="form-group">
                            <label>Tên danh mục:</label>
                            <input required="" type="text" id="title" onkeyup="ChangeToSlug();" name="nameCategory" class="form-control" placeholder="Tên danh mục...">
                        </div>
                        <div class="form-group">
                            <label>Slug URL:</label>
                            <input required type="text" name="slug" id="slug" class="form-control" placeholder="Hiển thị trên url ...">
                        </div>
                        <div class="form-group">
                            <label>Miêu tả</label>
                            <textarea rows=8 class="display_block" name="descCategory"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Từ khóa tìm kiếm</label>
                            <textarea rows=8 class="display_block" name="category_keywords"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Banner cho danh mục</label>
                            <input id="img" type="file" name="imgCategory" class="form-control hidden" onchange="changeImg(this)">
                            <img id="avatar" class="thumbnail" width="100" src="{{asset('public/backend/img/new_seo-10-512.png')}}">
                        </div>
                        <div class="form-group">
                            <label>Set Menu</label>
                            <br>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="show[]" value="1">Dự án
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="show[]" value="2">Tin tức
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Hiển thị</label>
                            <select name="statusCategory" class="form-control">
                                <option value="1">Hiện</option>
                                <option value="0">Ẩn</option>

                            </select>
                        </div>
                        <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                        @endif




                    </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    var myFunction = function() {
        var check = document.getElementById("flagship").checked;
        if (check == true) {
            var z = document.getElementById("flagship").value = "1";
        } else {
            var z =   document.getElementById("flagship").value = "0";
            document.getElementById("flagship").checked = false;
        }
        //alert( document.getElementById("flagship").value)
    };
    var checkFlag = document.getElementsByClassName('check-flagship');
    checkFlag[0].addEventListener('click', myFunction, false);
</script>
<!--/.row-->
@endsection()