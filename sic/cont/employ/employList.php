<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>goodTcell - 채용공고 </title>
    <meta name="title" content="goodTcell - 채용공고">
    <meta name="og:title" content="goodTcell - 채용공고">
    <?php
        include $_SERVER['DOCUMENT_ROOT']."/inc/css.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/js.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/header.php";
        include $_SERVER['DOCUMENT_ROOT']."/inc/sub.php";
    ?>
<div id="mqContents">
    <div id="notice" class="inner">
        <div class="notice_box">
            <h3 class="c_title"><?=($dep02_title)?></h3>
        </div>
        <div class="board">   
            <?php
                include $_SERVER['DOCUMENT_ROOT']."/inc/boardList.php";
            ?>

        </div>
    </div>
</div>
<?php
    include $_SERVER['DOCUMENT_ROOT']."/inc/footer.php";
?>

