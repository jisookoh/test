<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>goodTcell - CEO 인사말</title>
    <meta name="title" content="goodTcell - CEO 인사말">
    <meta name="og:title" content="goodTcell - CEO 인사말">
    <?php
        include $_SERVER['DOCUMENT_ROOT']."/inc/css.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/js.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/header.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/sub.php";
    ?>
<div id="mqContents">
    <div id="greeting" class="inner">
        <div class="title_box">
            <h3 class="c_title"><?=($dep02_title)?></h3>
        </div>
        <div class="gr_box">   
            <img src="/img/cont/greeting_img01.jpg" alt=""  data-aos="fade-down" data-aos-duration="2000">    
            <?php if($lang_type == 'ko'){ ?>
            <img src="/img/cont/greeting_img02.png" alt="" data-aos="fade-down" data-aos-duration="2000"> 
            <?php }?>
            <?php if($lang_type == 'en'){ ?>
            <img src="/img/cont/greeting_img02-en.png" alt="" data-aos="fade-down" data-aos-duration="2000"> 
            <?php }?>
            <div class="txt_box" data-aos="fade-down" data-aos-duration="2000">
                <span><?=$lang_msg['greeting01']?></span>
                <span><?=$lang_msg['greeting02']?></span>
                <span><?=$lang_msg['greeting03']?></span>
            </div>
            <div class="txt_box" data-aos="fade-down" data-aos-duration="2000">
                <span><?=$lang_msg['greeting04']?></span>
                <span><?=$lang_msg['greeting05']?></span>
            </div>
            <div class="txt_box" data-aos="fade-down" data-aos-duration="2000">
                <span><?=$lang_msg['greeting06']?></span>
                <span><?=$lang_msg['greeting07']?></span>
            </div>
            <p class="sign" data-aos="fade-down" data-aos-duration="2000"><?=$lang_msg['greeting08']?></p>
        </div>
    </div>
</div>
<?php
    include $_SERVER['DOCUMENT_ROOT']."/inc/footer.php";
?>

