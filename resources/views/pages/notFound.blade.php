@include('template.header')
<?php $address = $phone = $email = $linkFB = $pageId = $linkYtb = $linkInsta = '';
if ($info->count() > 0) {
    $address = $info[0]['address'];
    $phone = $info[0]['phone'];
    $email = $info[0]['email'];
    $linkFB = $info[0]['link_fb'];
    $pageId = $info[0]['page_id_fb'];
    $linkYtb = $info[0]['link_youtube'];
    $linkInsta = $info[0]['link_instagram'];
}
?>
<style>
    body {
    background: #dedede;
}
.page-wrap {
    min-height: 50vh;
}
</style>
<body id="bg">
    <div class="page-wraper page-about-us">
        <div id="loading-area"></div>
        <!-- header -->
        @include('template.include.headerMenu')
        <!-- header END -->

        <main id="section-about-us">

            <div class="container">
                <div class="row page-wrapper">
                    <div id="content" class="col-lg-12 col" role="main">

                    </div>
                </div>
            </div>


        </main>
  
        <div class="page-wrap d-flex flex-row align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <span class="display-1 d-block">404</span>
                        <div class="mb-4 lead">Không tìm thấy bài viết phù hợp</div>
                        <a href="{{URL::to('/')}}" class="btn btn-link">Về trang chủ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@include('template.footer')