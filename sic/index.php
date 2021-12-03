<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIC</title>
    <meta name="title" content="SIC">
    <meta name="og:title" content="SIC">
    <?php
        include $_SERVER['DOCUMENT_ROOT']."/inc/css.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/js.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/header.php";
    ?>
    <div id="mqMain">
        <!-- <aside class="fixed_nav m-none">
            <a href="#firstSection" class="active">
                <span class="dot"></span>
            </a>
            <span class="m-dot"></span>
            <a href="#secondSection">
                <span class="dot"></span>
            </a>
            <span class="m-dot"></span>
            <a href="#thirdSection">
                <span class="dot"></span>
            </a>
            <span class="m-dot"></span>
            <a href="#fourthSection">
                <span class="dot"></span>
            </a>           
        </aside>   -->
        <div id="fullpage">
            <section id="section1" class="section swiper-container1" data-anchor="firstSection">
                <article class="swiper-wrapper">
                    <div class="swiper-slide bg1">
                        <div class="visual_img mm-none">
                           <img src="/img/main/visual_img01.jpg" alt="비주얼 이미지1">
                        </div>
                        <div class="visual_img mm-block">
                           <img src="/img/main/mo_visual_img01.jpg" alt="비주얼 이미지1">
                        </div>
                    </div>
                    <div class="swiper-slide bg2">
                        <div class="visual_img mm-none">
                           <img src="/img/main/visual_img02.jpg" alt="비주얼 이미지1">
                        </div>
                        <div class="visual_img mm-block">
                           <img src="/img/main/mo_visual_img02.jpg" alt="비주얼 이미지1">
                        </div>
                    </div>
                </article>
                <div class="swiper-pagination visual_pagi"></div>
            </section>
            <section id="section2" class="section"  data-anchor="secondSection">
                <article class="sec2_wrap">
                    <ul class="flex-ac">
                        <a href="/solution/auto.php">
                        <li class="sec2_list sec2_list1">
                            <div class="txt_box">
                                <div class="en_txt">
                                    <span class="red">S</span><span>olution Provider</span>
                                </div>
                                <div class="kr_tit">
                                    <p class="kt">설비자동화 시스템 솔루션</p>
                                </div>
                            </div>
                        </li>
                        </a>
                        <a href="/solution/vision.php">
                        <li class="sec2_list sec2_list2">
                            <div class="txt_box">
                                <div class="en_txt">
                                    <span class="red">I</span><span>nteligent Program</span>
                                </div>
                                <div class="kr_tit">
                                    <p class="kt">비전 시스템 솔루션</p>
                                </div>
                            </div>
                        </li>
                        </a>
                        <a href="/customer/customer.php">
                        <li class="sec2_list sec2_list3">
                            <div class="txt_box">
                                <div class="en_txt">
                                    <span class="red">C</span><span>ustomer Support</span>
                                </div>
                                <div class="kr_tit">
                                    <p class="kt">소프트웨어 판매/고객지원</p>
                                </div>
                            </div>
                        </li>
                        </a>
                    </ul>
                </article>
            </section>
            <section id="section3" class="section"  data-anchor="secondSection" >
                <article class="sec3_wrap">
                    <div class="img_box">
                        <img src="/img/main/sec3_img01.png" alt="모션 제어, 실린더 제어, 아날로그 제어, 디지털 제어, 직렬 통신, 소켓 통신, CIM통신, 비전 검사, 로봇 제어">
                    </div>
                </article>
            </section>
           
            <section id="section4" class="section" data-anchor="thirdSection">
                   <div class="top_box">
                        <div class="en_tit">
                            <p class="et">System Integration Company</p>
                        </div>
                   </div>
                   <!-- pc -->
                   <div class="bt_box">
                        <div class="bt_tit">
                            <p class="bt">NEWS & 홍보자료</p>
                        </div>
                        <div class="bt_cont flex-box">
                            <div class="btc_left">
                                <div class="btc_tit">
                                    <p class="btct">SIC 소식</p>
                                </div>
                                <ul class="flex-ac">
                                    <li class="news_list news_list1">
                                        <a href="javascript:;">
                                            <div class="img_wrap">
                                                <img src="/img/main/sec4_img01.jpg" alt="">
                                            </div>
                                            <div class="txt_wrap">
                                                <p class="btx">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores id repellendus officiis quas quisquam itaque ea eaque, voluptate consequatur veritatis assumenda quibusdam vitae commodi nulla at fugiat perspiciatis, beatae quasi?</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="news_list">
                                        <a href="javascript:;">
                                            <div class="img_wrap">
                                                <img src="/img/main/sec4_img01.jpg" alt="">
                                            </div>
                                            <div class="txt_wrap">
                                                <p class="btx">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, quis dolorum alias id minus ipsam itaque, ab rerum a illum perferendis corrupti eaque totam corporis, repudiandae ea porro dolore enim.</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btc_right">
                                <div class="btc_tit flex-ac-jb">
                                    <p class="btct">홍보자료</p>
                                    <div class="plus_btn">
                                        <a href="javascript:;">
                                            <p class="plus">+</p>
                                        </a>
                                    </div>
                                </div>
                                <ul>
                                    <li class="notice_list">
                                        <a href="javascript:;" class="flex-ac">
                                            <div class="num_td">
                                                <p class="num">01</p>
                                            </div>
                                            <div class="tit_td">
                                                <p class="not_tit">SIC 자료실 입니다.</p>
                                            </div>
                                            <div class="date_td">
                                                <p class="date">21.00.00</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notice_list">
                                        <a href="javascript:;" class="flex-ac">
                                            <div class="num_td">
                                                <p class="num">02</p>
                                            </div>
                                            <div class="tit_td">
                                                <p class="not_tit">SIC 자료실 입니다.</p>
                                            </div>
                                            <div class="date_td">
                                                <p class="date">21.00.00</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notice_list">
                                        <a href="javascript:;" class="flex-ac">
                                            <div class="num_td">
                                                <p class="num">03</p>
                                            </div>
                                            <div class="tit_td">
                                                <p class="not_tit">SIC 자료실 입니다.</p>
                                            </div>
                                            <div class="date_td">
                                                <p class="date">21.00.00</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notice_list">
                                        <a href="javascript:;" class="flex-ac">
                                            <div class="num_td">
                                                <p class="num">04</p>
                                            </div>
                                            <div class="tit_td">
                                                <p class="not_tit">SIC 자료실 입니다.</p>
                                            </div>
                                            <div class="date_td">
                                                <p class="date">21.00.00</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notice_list">
                                        <a href="javascript:;" class="flex-ac">
                                            <div class="num_td">
                                                <p class="num">05</p>
                                            </div>
                                            <div class="tit_td">
                                                <p class="not_tit">SIC 자료실 입니다.</p>
                                            </div>
                                            <div class="date_td">
                                                <p class="date">21.00.00</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                   </div>
            </section>
            <?php
                include $_SERVER['DOCUMENT_ROOT']."/inc/footer.php";
            ?>
        </div>
      
</div>
    </body>
        </html>
    
        <script>
            var now_sw_idx = 1;
            var main_slide01_leng = $('.swiper-container1 .swiper-slide').length;
            $('.all_cus_pag').text(main_slide01_leng);

            $(function(){
               //initialize swiper when document ready
               var mySwiper = new Swiper('.swiper-container1', {
                    // on : {
                    //     init : function () {
                    //         swiper_bg(this.activeIndex);
                            
                    //     },
                    //     activeIndexChange: function () {
                    //         // console.log(this);
                    //         swiper_bg(this.activeIndex);
                    //     }
                    // },
                   // Optional parameters 
                   effect: 'fade',
                   direction: 'horizontal', // 방향
                   slidesPerView: 1, // 슬라이드를 한번에 3개를 보여준다
                   autoplay : { delay : 4000, 
                   disableOnInteraction: false},
                   loop: true, // loop 를 true 로 할경우 무한반복 슬라이드, false 로 할경우 슬라이드의 끝에서 더보여지지 않음
                //    navigation: {   // 버튼 사용자 지정
                //                nextEl: '.e-button-next1',
                //                prevEl: '.e-button-prev1',
                //    },
                   
                   observer: true,
                   observeParents: true,
                    parallax: true,
                    speed: 1000,
                    pagination: {
                        el: '.visual_pagi',
                        // type: 'fraction',
                        clickable:true,
                    },
                    on:{
                        slideChangeTransitionStart: function(){
                            now_sw_idx = this.realIndex+1;
                            $('.now_cus_pag').text(now_sw_idx);
                            // sketch_bot3.slideTo(now_sw_idx);
                            // currentSlide = sketch_bot3.slides[now_sw_idx];
                        }
                    }
               });
            });
          
        </script>
    <script>
        $(function(){
            var fixedNavBtn = $('#mqMain .fixed_nav');
            var w_width = $(window).width();
            console.log(w_width);
            $('#fullpage').fullpage({
                
                anchors:['firstSection', 'secondSection', 'thirdSection' , 'fourthSection', 'fifthSection'],
                menu: '.nav_box',
                onLeave: function(anchorLink, index){
                    
                    fixedNavBtn.find('a').removeClass('active');
                    fixedNavBtn.find('a').eq(index-1).addClass('active');
                    if(w_width > 768){
                        if(index == 1){
                            $('#mqHeader').css({'margin-top':'0'});
                        }else{
                            $('#mqHeader').css({'margin-top':'-120px'});
                        }
                        if(index == 2){
                            
                        }else{
                    
                        }
                        if(index == 3){
                        
                        }else{
                        
                        
                        }
                        if(index == 4){
                            
                        }else{
                        
                        } 
                    }else if(w_width < 768){
                        $('#mqHeader.mm-block').removeClass('hide');
                        if(index == 1){
                            
                        }
                        if(index == 2){
                          
                        }
                        if(index == 3){
                            
                        }
                        if(index == 4){
                            
                        }
                        if(index == 5){
                            $('#mqHeader.mm-block').addClass('hide');
                        }
                    }

               

                },

         

                
               
            });
            
         
            
        AOS.init();
        
        
        });
        
    </script>
