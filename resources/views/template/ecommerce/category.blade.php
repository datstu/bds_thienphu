
<?php
$category = Helper::getListCategory();
?>        

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{URL::to('/danh-sach-san-pham')}}"><i class="fa fa-home"></i>Tất Cả </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL::to('/san-pham-theo-danh-muc-999')}}"><i class="fa fa-tshirt"></i>Xả hàng || Giảm giá </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-shopping-bag"></i>Dưỡng Da</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-plus-square"></i>Thiết Bị Y Tế</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-female"></i> Đồ Nữ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-child"></i>Đồ Nam</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Quần Áo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Mỹ Phẩm</a>
            </li> --}}
            @foreach($category as $cate)
            <li class="nav-item">
                <a class="nav-link" href="{{URL::to('/san-pham-theo-danh-muc-'.$cate->category_id)}}"><i class="fa {{$cate->category_desc}}"></i>{{$cate->category_name}}</a>
            </li>
            @endforeach
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Danh mục khác</a>
            </li>
        </ul>
 