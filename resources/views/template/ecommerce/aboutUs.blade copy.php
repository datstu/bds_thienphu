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

                        <header class=" text-center">
                            <h1 class="">Giới Thiệu</h1>
                            <div class="is-divider col-md"></div>
                        </header>

                        <div class="entry-content">
                            <section class="section">
                                <div class="bg section-bg fill bg-fill bg-loaded">
                                </div>

                                <div class="section-content relative">

                                    <div class="row about-dec">

                                        <div class="col col-md-10 col-sm-12 col-lg-10">
                                            <div class="col-inner">
                                                <p>Công ty Cổ Phần Đầu Tư Địa Ốc Thiên Phú Tây Ninh được thành lập bởi các thành viên nhiều kinh nghiệm và tâm huyết trong lĩnh vực quy hoạch,đầu tư và kinh doanh các dự án bất động sản.</p>
                                                <p>Công ty đã và đang phát triển theo định hướng kinh doanh đa dạng lĩnh vực trong ngành địa ốc: Đầu tư xây dựng các dự án căn hộ, chung cư cao cấp; kinh doanh bất động sản theo chuỗi dự án và đất nền trung khu… trong đó kinh doanh bất động sản là dịch vụ “lõi” của Thiên Phú.</p>
                                                <p>
                                                    Từ khi thành lập, Thiên Phú Tây Ninh luôn xác định mục tiêu của mình là “An cư lạc nghiệp” và phấn đấu trở thành một trong những công ty hàng đầu, chuyên nghiệp và phát triển trong lĩnh vực kinh doanh bất động sản.</p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </section>

                            <div class="row row-about-us">
                                <div class=" col-md-6 col-sm-12 col-lg-6">
                                    <div class="col-inner">
                                        <div class="banner has-hover">
                                            <div class="banner-inner fill">
                                               
                                                <div class="banner-layers container">
                                                    <div class="fill banner-link"><img src="{{asset('public/frontend/images/banner/about1.jpg')}}" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div id="col-vision" class="col-sm-12 col-lg-6  col-md-5  ">
                                    <div class="col-inner">
                                        <div class="banner has-hover">
                                            <div class="banner-inner fill">

                                                <div class="banner-layers container">
                                                    <div class="fill banner-link"></div>
                                                    <div class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                                        <div class="text-box-content text ">

                                                            <div class="text-inner text-center">

                                                                <div class="container section-title-container">
                                                                    <h2 class="section-title section-title-center"><b></b><span class="section-title-main">TẦM NHÌN</span><b></b></h2>
                                                                </div>
                                                                <div  class="text">

                                                                    <p>Trở thành một trong những Tập đoàn kinh tế tư nhân Việt Nam; lấy lĩnh vực Bất động sản và Đầu tư làm lĩnh vực chiến lược. Luôn thuộc nhóm các công ty dẫn đầu trong các dự án mà Hải Phát tham gia. Tiên phong trong việc xây dựng văn hóa doanh nghiệp: bài bản, văn minh, chuyên nghiệp và nhân văn ở Việt Nam.<br>
                                                                    </p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row">

                                <div id="col-mission" class="  col-md-6 col-sm-12 col-lg-6">
                                    <div class="col-inner">
                                        <div class="banner has-hover">

                                            <div class="banner-inner fill">
                                                <div class="banner-layers container">
                                                    
                                                    <div class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                                        <div class="text-box-content text ">

                                                            <div class="text-inner text-center">

                                                                <div class="container section-title-container">
                                                                    <h2 class="section-title section-title-center"><b></b><span class="section-title-main">SỨ MỆNH</span><b></b></h2>
                                                                </div>
                                                                <div class="text">

                                                                    <p>Tổng giá trị đầu tư, tài sản, doanh thu, lợi nhuận cũng như các khoản nộp ngân sách, và phúc lợi xã hội ngày càng tăng. Thiên Phú sẽ nỗ lực hơn nữa để những tiềm năng trên mọi cá nhân được phát huy hết sức sáng tạo, khơi dậy và phát triển mạnh mẽ tiềm năng con người. Khẳng định vị thế của một doanh nghiệp trẻ, một thương hiệu của sự NĂNG ĐỘNG, TRẺ TRUNG, HIỆN ĐẠI, CHUYÊN NGHIỆP.<br>

                                                                        
                                                                    </p>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class=" col-md-6 col-sm-12 col-lg-6 ">
                                    <div class="col-inner">
                                        <div class="banner has-hover">
                                            <div class="banner-inner fill">
                                                <div class="banner-bg fill">
                                                    <div class="bg fill bg-fill bg-loaded">
                                                        <img src="{{asset('public/frontend/images/banner/sumenh.jpg')}}" alt="">
                                                    </div>

                                                </div>
                                                <div class="banner-layers container">
                                                    <div class="fill banner-link"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row row-collapse row-full-width">

                                <div class=" col-md-6 col-sm-12 col-lg-6">
                                    <div class="col-inner">
                                        <div class="banner has-hover ">
                                            <div class="banner-inner fill">
                                                <div class="banner-bg fill">
                                                    <div class="bg fill bg-fill bg-loaded">
                                                        <img src="{{asset('public/frontend/images/banner/gia-tri-cot-loi.jpg')}}" alt="">
                                                    </div>

                                                </div>
                                                <div class="banner-layers container">
                                                    <div class="fill banner-link"></div>
                                                </div>
                                            </div>


                                    
                                        </div>


                                    </div>
                                </div>



                                <div id="col-core" class=" col-md-6 col-sm-12 col-lg-6">
                                    <div class="col-inner">
                                        <div class="banner has-hover">
                                            <div class="banner-inner fill">
                                               
                                                <div class="banner-layers container">
                                                    <div class="fill banner-link"></div>
                                                    <div  class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                                        <div class="text-box-content text ">

                                                            <div class="text-inner text-center">

                                                                <div class="container section-title-container">
                                                                    <h2 class="section-title section-title-center"><b></b><span class="section-title-main">GIÁ TRỊ CỐT LÕI</span><b></b></h2>
                                                                </div>
                                                                <div  class="text">

                                                                    <p>Với tôn chỉ “An cư lạc nghiệp” Thiên Phú lấy con người làm trung tâm cốt lõi, là tài sản to lớn nhất của doanh nghiệp để xây dựng một tập thể trí thức trẻ, năng động, đoàn kết và giàu nhiệt huyết.<br>

                                                                        <style>
                                                                          
                                                                        </style>
                                                                    </p>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        
                                                    </div>

                                                </div>
                                            </div>



                                        </div>


                                    </div>
                                </div>


                            </div>
                           
                            <section class="section" id="section-structure">
                                <div class="section-content relative">

                                    <div class="container section-title-container">
                                        <h1 class="section-title section-title-center"><b></b><span class="section-title-main">CƠ CẤU TỔ CHỨC</span><b></b></h1>
                                    </div>
                                    <div class="img has-hover x md-x lg-x y md-y lg-y grid-width-100">
                                        <div class="img-inner dark">
                                            <img width="800" height="800" src="{{asset('public/frontend/images/banner/struc.jpg')}}" class="attachment-col-lg size-col-lg" alt="" loading="lazy" >
                                        </div>


                                    </div>

                                </div>


                               
                            </section>

                            <div class="container section-title-container">
                                <h1 class="section-title section-title-center"><b></b><span class="section-title-main">Văn Phòng</span><b></b></h1>
                            </div>
                            <section class="section">
                        
                                <div class="section-content relative">

                                    <div class="row align-center" id="row-office">

                                        <div class="col col-md-10 col-sm-12 col-lg-10">
                                            <div class="col-inner">


                                                <div class="row">

                                                    <div class=" col-md-6 col-sm-12 col-lg-6">
                                                        <div class="col-inner">


                                                            <div class="box has-hover   has-hover box-text-bottom">

                                                                <div class="box-image">
                                                                    <div class="image-cover">
                                                                        <img width="1400" height="709" src="{{asset('public/frontend/images/banner/vp1.jpg')}}"
                                                                         alt="" loading="lazy"sizes="(max-width: 1400px) 100vw, 1400px">
                                                                    </div>
                                                                </div>

                                                                <div class="box-text text-center" style="padding:20px 0px 0px 0px;">
                                                                    <div class="box-text-inner">

                                                                        <h3>TP.Tây Ninh<br>
                                                                        </h3>
                                                                        <p>Sô 344 Đường 30/4, Khu Phố 1, Phường 3, TP.Tây Ninh </p>


                                                                        <h6>LIÊN HỆ<br>
                                                                        </h6>
                                                                        <p>02766 525 525<br><a href="mailto:info.thienphutayninh@gmail.com">info.thienphutayninh@gmail.com</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>



                                                    <div class=" col-md-6 col-sm-12 col-lg-6">
                                                        <div class="col-inner">


                                                            <div class="box has-hover   has-hover box-text-bottom">

                                                                <div class="box-image">
                                                                    <div class="image-cover">
                                                                        <img width="1400" height="709" src="{{asset('public/frontend/images/banner/vp1.jpg')}}"  alt="" loading="lazy"
                                                                          sizes="(max-width: 1400px) 100vw, 1400px">
                                                                    </div>
                                                                </div>

                                                                <div class="box-text text-center" style="padding:20px 0px 0px 0px;">
                                                                    <div class="box-text-inner">

                                                                        <h3>TP.Tây Ninh<br>
                                                                        </h3>
                                                                        <p>Sô 344 Đường 30/4, Khu Phố 1, Phường 3, TP.Tây Ninh </p>

                                                                        <h6>LIÊN HỆ<br>
                                                                        </h6>
                                                                        <p>02766 525 525<br><a href="mailto:info.thienphutayninh@gmail.com">info.thienphutayninh@gmail.com</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>



                            </section>

                            <section class="section ">

                                <div class="section-content relative">

                                    <div class="container section-title-container">
                                        <h1 class="section-title section-title-center"><b></b><span class="section-title-main">Chủ đầu tư hàng đầu</span><b></b></h1>
                                    </div>
                                </div>


                                
                            </section>

                            <section class="section" >
                                <div class="bg section-bg fill bg-fill  bg-loaded">





                                </div>

                                <div class="section-content relative">

                                    <div class="row row-collapse align-equal" style="max-width:1200px" >

                                        <div class=" col-md-4 col-sm-12 col-lg-4 ">
                                            <div class="col-inner text-center" style="max-width:100%;">


                                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1533662744">
                                                    <a class="image-lightbox lightbox-gallery" title="" href="">
                                                        <div class="img-inner dark" style="margin:10% 10% 10% 10%;">
                                                            <img width="1020" height="560" src="{{asset('public/frontend/images/banner/sun-group.png')}}"
                                                            sizes="(max-width: 1020px) 100vw, 1020px">
                                                        </div>
                                                    </a>
                                                   
                                                </div>

                                            </div>

                                            
                                        </div>



                                        <div  class=" col-md-4 col-sm-12 col-lg-4 ">
                                            <div class="col-inner text-center" style="max-width:100%;">


                                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1078547217">
                                                    <div class="img-inner dark" style="margin:10% 10px 10% 10%;">
                                                        <img width="1020" height="560" src="{{asset('public/frontend/images/banner/HT.png')}}" 
                                                         sizes="(max-width: 1020px) 100vw, 1020px">
                                                    </div>

                                                   
                                                </div>

                                            </div>

                                        
                                        </div>



                                        <div  class="col col-md-4 col-sm-12 col-lg-4">
                                            <div class="col-inner text-center" style="max-width:100%;">


                                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_885971772">
                                                    <div class="img-inner dark">
                                                        <img width="1020" height="574" src="{{asset('public/frontend/images/banner/novala.jpg')}}"
                                                    sizes="(max-width: 1020px) 100vw, 1020px">
                                                    </div>

                                                   
                                                </div>

                                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_225563032">
                                                    <div class="img-inner dark" style="margin:10% 10% 10% 10%;">

                                                    </div>

                                                    
                                                </div>

                                            </div>

                                            
                                        </div>



                                        <div class="col col-md-4 col-sm-12 col-lg-4">
                                            <div class="col-inner text-center" style="max-width:100%;">


                                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1903966488">
                                                    <div class="img-inner dark" style="margin:10% 10% 10% 10%;">
                                                        <img width="1020" height="560" src="{{asset('public/frontend/images/banner/sun-group.png')}}"
                                                         sizes="(max-width: 1020px) 100vw, 1020px">
                                                    </div>

                                                   
                                                </div>

                                            </div>

                                            
                                        </div>



                                        <div  class="col col-md-4 col-sm-12 col-lg-4">
                                            <div class="col-inner text-center" style="max-width:100%;">


                                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1505132841">
                                                    <div class="img-inner dark" style="margin:10% 10% 10% 10%;">
                                                        <img width="300" height="154" src="{{asset('public/frontend/images/banner/MGV.jpg')}}" class="attachment-col-lg size-col-lg" alt="" loading="lazy">
                                                    </div>
                                                </div>

                                            </div>

                                            
                                        </div>



                                        <div  class="col col-md-4 col-sm-12 col-lg-4">
                                            <div class="col-inner text-center" style="max-width:100%;">


                                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1106631243">
                                                    <div class="img-inner dark" style="margin:10% 10% 10% 10%;">
                                                        <img width="300" height="154" src="{{asset('public/frontend/images/banner/ceo-group.jpg')}}" class="attachment-col-lg size-col-lg" alt="" loading="lazy">
                                                    </div>

                                                    
                                                </div>

                                            </div>

                                            
                                        </div>




                                    </div>
                                </div>


                              
                            </section>

                            

                            <section class="section ">
                                

                                <div class="section-content relative">

                                    <div class="container section-title-container">
                                        <h1 class="section-title section-title-center"><b></b><span class="section-title-main">ĐỐI TÁC NGÂN HÀNG</span><b></b></h1>
                                    </div>
                                </div>


                               
                            </section>

                            <section class="section ">
                                

                                <div class="section-content relative">

                                    <div class="row row-collapse align-equal" style="max-width:1200px" id="row-271528284">

                                        <div class="col col-md-3 col-sm-12 col-lg-3">
                                            <div class="col-inner text-center" style="background-color:rgb(255, 255, 255);">


                                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_374003876">
                                                    <div class="img-inner dark" style="margin:10% 10% 10% 10%;">
                                                        <img width="600" height="344" src="{{asset('public/frontend/images/banner/viettin.jpg')}}" class="attachment-col-lg size-col-lg" alt="" loading="lazy">
                                                    </div>

                                                    
                                                </div>

                                            </div>
                                        </div>



                                        <div  class="col col-md-3 col-sm-12 col-lg-3">
                                            <div class="col-inner text-center" style="background-color:rgb(255, 255, 255);">


                                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_243816109">
                                                    <div class="img-inner dark" style="margin:10% 10% 10% 10%;">
                                                        <img width="1020" height="671" src="{{asset('public/frontend/images/banner/argi.png')}}"
                                                         class="attachment-col-lg size-col-lg" alt="" loading="lazy" sizes="(max-width: 1020px) 100vw, 1020px">
                                                    </div>

                                                    
                                                </div>

                                            </div>

                                            
                                        </div>



                                        <div  class="col col-md-3 col-sm-12 col-lg-3">
                                            <div class="col-inner text-center" style="background-color:rgb(255, 255, 255);">


                                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_610045295">
                                                    <div class="img-inner dark" style="margin:10px 10% 10% 10%;">
                                                        <img width="400" height="226"src="{{asset('public/frontend/images/banner/acb.png')}}" class="attachment-col-lg size-col-lg" alt="" loading="lazy">
                                                    </div>

                                                    
                                                </div>

                                            </div>
                                        </div>



                                        <div  class="col col-md-3 col-sm-12 col-lg-3">
                                            <div class="col-inner text-center" style="background-color:rgb(255, 255, 255);">


                                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1071798812">
                                                    <div class="img-inner dark" style="margin:10% 10% 10% 10%;">
                                                        <img width="900" height="551" src="{{asset('public/frontend/images/banner/VP.jpg')}}" class="attachment-col-lg size-col-lg" alt="" loading="lazy" 
                                                      sizes="(max-width: 900px) 100vw, 900px">
                                                    </div>

                                                  
                                                </div>

                                            </div>
                                        </div>




                                    </div>
                                </div>


                               
                            </section>


                        </div>




                    </div>
                </div>
            </div>


        </main>
    </div>
</body>

@include('template.footer')