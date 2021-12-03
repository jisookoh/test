<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>goodTcell - 연혁</title>
    <meta name="title" content="goodTcell - 연혁">
    <meta name="og:title" content="goodTcell - 연혁">
    <?php
        include $_SERVER['DOCUMENT_ROOT']."/inc/css.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/js.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/header.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/sub.php";
    ?>
<div id="mqContents">
    <div id="history" class="inner">
        <div class="title_box">
            <h3 class="c_title"><?=($dep02_title)?></h3>
        </div>
        <div class="his_box">   
            <div class="h_inner">
                <dl class="his_list" data-aos="fade-down" data-aos-duration="1000">
                    <dt class="year">2021</dt>
                    <dd>
                        <span class="month">04</span>
                        <span class="txt"><?=$lang_msg['history01']?></span>
                    </dd>
                </dl>
                <dl class="his_list" data-aos="fade-down" data-aos-duration="1000">
                    <dt class="year">2018</dt>
                    <dd>
                        <span class="month">04</span>
                        <span class="txt"><?=$lang_msg['history02']?></span>
                    </dd>
                    <dd>
                        <span class="month">04</span>
                        <span class="txt"><?=$lang_msg['history03']?></span>
                    </dd>
                    <dd>
                        <span class="month">09</span>
                        <span class="txt"><?=$lang_msg['history04']?></span>
                    </dd>
                    <dd>
                        <span class="month">06</span>
                        <span class="txt"><?=$lang_msg['history05']?></span>
                    </dd>
                    <dd>
                        <span class="month">05</span>
                        <span class="txt"><?=$lang_msg['history06']?></span>
                    </dd>
                </dl>
                <dl class="his_list" data-aos="fade-down" data-aos-duration="1000">
                    <dt class="year">2017</dt>
                    <dd>
                        <span class="month">02</span>
                        <span class="txt"><?=$lang_msg['history07']?></span>
                    </dd>
                </dl>
                <dl class="his_list" data-aos="fade-down" data-aos-duration="1000">
                    <dt class="year">2016</dt>
                    <dd>
                        <span class="month">07</span>
                        <span class="txt"><?=$lang_msg['history08']?></span>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div>
<?php
    include $_SERVER['DOCUMENT_ROOT']."/inc/footer.php";
?>

