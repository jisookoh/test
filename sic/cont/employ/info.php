<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>goodTcell - 채용정보</title>
    <meta name="title" content="goodTcell - 채용정보">
    <meta name="og:title" content="goodTcell - 채용정보">
    <?php
        include $_SERVER['DOCUMENT_ROOT']."/inc/css.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/js.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/header.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/sub.php";
    ?>
<div id="mqContents">
    <div id="info" class="inner">
        <div class="title_box">
            <h3 class="c_title"><?=($dep02_title)?></h3>
            <p class="p_color txt24 cc_title"  data-aos="fade-down" data-aos-duration="2000"><?=$lang_msg['jobs01']?></p>
        </div>
        <div class="info_box">   
            <div class="t_frame">
                <p class="p_title" data-aos="fade-right" data-aos-duration="1500"><?=$lang_msg['jobs02']?></p>
                <div class="img" data-aos="fade-down" data-aos-duration="2000">
                    <img src="/img/cont/intro_img01.png" alt="" class="mm-none">
                    <img src="/img/cont/intro_img01-m.png" alt="" class="pct-none">
                </div>
            </div>
            <div class="t_frame">
                <p class="p_title" data-aos="fade-right" data-aos-duration="1500"><?=$lang_msg['jobs03']?></p>
               <p class="txt txt24" data-aos="fade-down" data-aos-duration="2000">
                   <span><?=$lang_msg['jobs04']?></span>
                   <span><?=$lang_msg['jobs05']?></span>
               </p>
            </div>
            <div class="t_frame">
                <p class="p_title" data-aos="fade-right" data-aos-duration="1500"><?=$lang_msg['jobs06']?></p>
               <p class="txt txt24" data-aos="fade-down" data-aos-duration="2000">
                   <span><?=$lang_msg['jobs07']?></span>
                   <span><?=$lang_msg['jobs08']?></span>
                   <span><?=$lang_msg['jobs09']?></span>
                   <span><?=$lang_msg['jobs10']?></span>
                   <span><?=$lang_msg['jobs11']?></span>
                   <span><?=$lang_msg['jobs12']?></span>
               </p>
            </div>
        </div>
    </div>
</div>
<?php
    include $_SERVER['DOCUMENT_ROOT']."/inc/footer.php";
?>

