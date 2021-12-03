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
    <div id="map" class="inner">
        <div class="title_box">
            <h3 class="c_title"><?=($dep02_title)?></h3>
        </div>
        <div class="map_box">   
            <div class="map_top">
                <!-- * 카카오맵 - 지도퍼가기 -->
                <!-- 1. 지도 노드 -->
                <div id="daumRoughmapContainer1637743309012" class="root_daum_roughmap root_daum_roughmap_landing" data-aos="fade-down" data-aos-duration="2000"></div>

                <!--
                    2. 설치 스크립트
                    * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                -->
                <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                <!-- 3. 실행 스크립트 -->
                <script charset="UTF-8">
                    new daum.roughmap.Lander({
                        "timestamp" : "1637743309012",
                        "key" : "287cp",
                        "mapWidth" : "640",
                        "mapHeight" : "400"
                    }).render();
                </script>
                <p class="map_title" data-aos="fade-down" data-aos-duration="2000"><?=$lang_msg['footer01']?> : <?=$lang_msg['map01']?></p>
            </div>
            <div class="map_bt">
                <p class="title" data-aos="fade-right" data-aos-duration="1500"><?=$lang_msg['map02']?></p>
                <dl class="t_list" data-aos="fade-down" data-aos-duration="2000">
                    <dt class="flex-box">
                        <img src="/img/cont/map_img01.png" alt="">
                        <span class="txt24"><?=$lang_msg['map03']?></span>
                    </dt>
                    <dd class="txt20"><?=$lang_msg['map04']?></dd>
                    <dd class="txt20"><?=$lang_msg['map05']?></dd>
                    <dd class="txt20"><?=$lang_msg['map06']?></dd>
                </dl>
                <dl class="t_list" data-aos="fade-down" data-aos-duration="2000">
                    <dt class="flex-box">
                        <img src="/img/cont/map_img02.png" alt="">
                        <span class="txt24"><?=$lang_msg['map07']?></span>
                    </dt>
                    <dd class="txt20">- 171, 172, 710, 7016, 9711, 7711, 7730, 7737, 6012</dd>
                </dl>
            </div>
        </div>
    </div>
</div>
<?php
    include $_SERVER['DOCUMENT_ROOT']."/inc/footer.php";
?>

