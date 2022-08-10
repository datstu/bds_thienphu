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
                    <?= $about[0]['content']?>
                    </div>
                </div>
            </div>


        </main>
    </div>
</body>

@include('template.footer')