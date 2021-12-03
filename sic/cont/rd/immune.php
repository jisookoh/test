<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>goodTcell - 면역세포 치료제</title>
    <meta name="title" content="goodTcell - 면역세포 치료제">
    <meta name="og:title" content="goodTcell - 면역세포 치료제">
    <?php
        include $_SERVER['DOCUMENT_ROOT']."/inc/css.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/js.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/header.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/sub.php";
    ?>
<div id="mqContents">
    <div id="immune" class="inner">
        <div class="title_box">
            <h3 class="c_title"><?=($dep02_title)?></h3>
        </div>
        <div class="imm_box">   
            <div class="t_frame">
                <p class="p_title" data-aos="fade-right" data-aos-duration="1500"><?=$lang_msg['immune01']?></p>
                <p class="title txt24 p_color" data-aos="fade-down" data-aos-duration="2000">
                    <span><?=$lang_msg['immune02']?></span>
                    <span><?=$lang_msg['immune03']?></span>
                    <span><?=$lang_msg['immune04']?></span>
                </p>
                <p class="txt txt20" data-aos="fade-down" data-aos-duration="2000">
                    <span><?=$lang_msg['immune05']?></span>
                    <span><?=$lang_msg['immune06']?></span>
                    <span><?=$lang_msg['immune07']?></span>
                </p>
                <div class="img" data-aos="fade-down" data-aos-duration="2000">
                    <img src="/img/cont/imm_img01.png" alt="">
                </div>
                <p class="txt txt20" data-aos="fade-down" data-aos-duration="2000">
                    <span><?=$lang_msg['immune08']?></span>
                    <span><?=$lang_msg['immune09']?></span>
                </p>
            </div>
            <div class="t_frame">
                <p class="p_title" data-aos="fade-right" data-aos-duration="1500"><?=$lang_msg['immune10']?></p>
                <p class="title txt24 p_color" data-aos="fade-down" data-aos-duration="2000">
                    <span><?=$lang_msg['immune11']?></span>
                    <span><?=$lang_msg['immune12']?></span>
                    <span><?=$lang_msg['immune13']?></span>
                </p>
                <p class="txt txt20" data-aos="fade-down" data-aos-duration="2000">
                    <span><?=$lang_msg['immune14']?></span>
                    <span><?=$lang_msg['immune15']?></span>
                    <span><?=$lang_msg['immune16']?></span>
                </p>
                <div class="img" data-aos="fade-down" data-aos-duration="2000">
                    <img src="/img/cont/imm_img02.png" alt="">
                </div>
                <p class="txt txt20" data-aos="fade-down" data-aos-duration="2000">
                    <span><?=$lang_msg['immune17']?></span>
                    <span><?=$lang_msg['immune18']?></span>
                </p>
            </div>
        </div>
    </div>
</div>
<?php
    include $_SERVER['DOCUMENT_ROOT']."/inc/footer.php";
?>

