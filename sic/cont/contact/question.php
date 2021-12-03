<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>goodTcell - 문의하기</title>
    <meta name="title" content="goodTcell - 문의하기">
    <meta name="og:title" content="goodTcell - 문의하기">
    <?php
        include $_SERVER['DOCUMENT_ROOT']."/inc/css.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/js.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/header.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/sub.php";
    ?>
<div id="mqContents">
    <div id="question" class="inner">
        <div class="title_box">
            <h3 class="c_title"><?=($dep02_title)?></h3>
        </div>
        <div class="que_box">   
            <form action="" class="question_form">
                <div class="input_box flex-box">
                    <label for="name" class="txt20"><?=$lang_msg['contact01']?></label>
                    <input type="text" id="name" class="txt20">
                </div>
                <div class="input_box flex-box">
                    <label for="phone" class="txt20"><?=$lang_msg['contact02']?></label>
                    <input type="text" id="phone" class="txt20">
                </div>
                <div class="input_box flex-box">
                    <label for="email" class="txt20"><?=$lang_msg['contact03']?></label>
                    <input type="text" id="email" class="txt20">
                </div>
                <div class="input_box flex-box">
                    <label for="title" class="txt20"><?=$lang_msg['contact04']?></label>
                    <input type="text" id="title" class="txt20 w80">
                </div>
                <div class="input_box flex-box">
                    <label for="text" class="txt20"><?=$lang_msg['contact05']?></label>
                    <textarea name="" id="text" class="txt20 w80" rows="10"></textarea>
                </div>
                <div class="input_box">
                    <p class="txt20 tt"><?=$lang_msg['contact06']?></p>
                    <p class="txt_box">

                    </p>
                    <p class="agree_box">
                        <input type="checkbox" id="agree">
                        <label for="agree" class="txt18"><?=$lang_msg['contact07']?></label>
                    </p>    
                </div>
                <button type="" class="apply_btn txt24"><?=$lang_msg['contact08']?></button>
            </form>
        </div>
    </div>
</div>
<?php
    include $_SERVER['DOCUMENT_ROOT']."/inc/footer.php";
?>

