<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>goodTcell - CI</title>
    <meta name="title" content="goodTcell - CI">
    <meta name="og:title" content="goodTcell - CI">
    <?php
        include $_SERVER['DOCUMENT_ROOT']."/inc/css.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/js.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/header.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/sub.php";
    ?>
<div id="mqContents">
    <div id="summary" class="inner">
        <div class="title_box">
            <h3 class="c_title"><?=($dep02_title)?></h3>
        </div>
        <div class="sum_box" >   
            <div class="txt_box" data-aos="fade-down" data-aos-duration="2000">
                <p><?=$lang_msg['sum01']?></p>
                <p><?=$lang_msg['sum02']?></p>
                <p><?=$lang_msg['sum03']?></p>
                <p><?=$lang_msg['sum04']?></p>
                <p><?=$lang_msg['sum05']?></p>
            </div>
        </div>
    </div>
</div>

<?php
    include $_SERVER['DOCUMENT_ROOT']."/inc/footer.php";
?>

