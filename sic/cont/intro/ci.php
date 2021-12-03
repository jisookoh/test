<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>goodTcell - CI 소개</title>
    <meta name="title" content="goodTcell - CI 소개">
    <meta name="og:title" content="goodTcell - CI 소개">
    <?php
        include $_SERVER['DOCUMENT_ROOT']."/inc/css.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/js.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/header.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/sub.php";
    ?>
<div id="mqContents">
    <div id="ci" class="inner">
        <div class="title_box">
            <h3 class="c_title"><?=($dep02_title)?></h3>
        </div>
        <div class="ci_box">   
            <div class="top_box">
                <p class="p_title" data-aos="fade-right" data-aos-duration="1500">Coperate Identity</p>
                <div class="txt_box">
                    <img src="/img/cont/ci_img01.png" alt="" data-aos="fade-down" data-aos-duration="2000">
                    <p class="txt" data-aos="fade-down" data-aos-duration="2000">
                        <span><?=$lang_msg['ci01']?></span>
                        <span><?=$lang_msg['ci02']?></span>
                    </p>
                </div>
            </div>
            <div class="bt_box">
                <p class="p_title" data-aos="fade-right" data-aos-duration="1500"><?=$lang_msg['ci03']?></p>
                <ul class="bt_list">
                    <li class="b1" data-aos="fade-down" data-aos-duration="1000">
                        <p class="title">
                            <span><?=$lang_msg['ci04']?></span>
                        </p>
                        <p class="txt">
                            <span><?=$lang_msg['ci05']?></span>
                            <span><?=$lang_msg['ci06']?></span>
                            <span><?=$lang_msg['ci07']?></span>
                        </p>
                    </li>
                    <li class="b2" data-aos="fade-down" data-aos-duration="2000">
                        <p class="title">
                            <span><?=$lang_msg['ci08']?></span>
                        </p>
                        <p class="txt">
                            <span><?=$lang_msg['ci09']?></span>
                            <span><?=$lang_msg['ci10']?></span>
                            <span><?=$lang_msg['ci11']?></span>
                        </p>
                    </li>
                    <li class="b3" data-aos="fade-down" data-aos-duration="3000">
                        <p class="title">
                            <span><?=$lang_msg['ci12']?></span>
                        </p>
                        <p class="txt">
                            <span><?=$lang_msg['ci13']?></span>
                            <span><?=$lang_msg['ci14']?></span>
                            <span><?=$lang_msg['ci15']?></span>
                        </p>
                    </li>
                </ul>
                
            
            </div>
        </div>
    </div>
</div>
<?php
    include $_SERVER['DOCUMENT_ROOT']."/inc/footer.php";
?>

