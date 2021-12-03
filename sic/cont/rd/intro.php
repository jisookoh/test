<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>goodTcell - 연구소 소개</title>
    <meta name="title" content="goodTcell - 연구소 소개">
    <meta name="og:title" content="goodTcell - 연구소 소개">
    <?php
        include $_SERVER['DOCUMENT_ROOT']."/inc/css.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/js.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/header.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/sub.php";
    ?>
<div id="mqContents">
    <div id="intro" class="inner">
        <div class="title_box">
            <h3 class="c_title"><?=($dep02_title)?></h3>
        </div>
        <div class="intro_box">   
            <div class="intro_top">
                <p class="p_title" data-aos="fade-right" data-aos-duration="1500"><?=$lang_msg['child02-1']?></p>
                <div class="frame" data-aos="fade-down" data-aos-duration="2000">
                    <img src="/img/cont/intro_img01.jpg" alt="">
                    <div class="txt_box">
                        <p class="title">The <span class="y_color">Frist-In-Class</span> Precision Immuno-Therapy</p>
                        <p class="txt">
                            <span><?=$lang_msg['aboutLab01']?></span>
                            <span><?=$lang_msg['aboutLab02']?></span>
                            <span><?=$lang_msg['aboutLab03']?></span>
                            <span><?=$lang_msg['aboutLab04']?></span>
                        </p>
                    </div>
                </div>
                <div class="img">
                <?php if($lang_type == 'ko'){ ?>
                    <img src="/img/cont/intro_img02.png" alt="" data-aos="fade-down" data-aos-duration="2000">
                <?php }?>    
                <?php if($lang_type == 'en'){ ?>
                    <img src="/img/cont/intro_img02-en.png" alt="" data-aos="fade-down" data-aos-duration="2000">
                <?php }?>  
                </div>
            </div>
            <div class="intro_bt">
                <p class="p_title" data-aos="fade-right" data-aos-duration="1500"><?=$lang_msg['aboutLab05']?></p>
                <div class="img" data-aos="fade-down" data-aos-duration="2000">
                    <img src="/img/cont/intro_img03.jpg" alt="">
                </div>
                <p class="title txt30" data-aos="fade-down" data-aos-duration="2000"><?=$lang_msg['aboutLab06']?></p>
                <p class="txt" data-aos="fade-down" data-aos-duration="2000"><?=$lang_msg['aboutLab07']?></p>
            </div>
        </div>
    </div>
</div>
<?php
    include $_SERVER['DOCUMENT_ROOT']."/inc/footer.php";
?>

