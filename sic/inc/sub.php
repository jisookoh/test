<?php
ini_set('display_errors','0')
?>
<?php if($lang_type == 'ko'){ ?>
<?php
    $dep01_title = '';
    $dep02_title = '';
    $dep03_title = '';

    $page_url = $_SERVER['REQUEST_URI']; //
    $page_url_arr = explode('/', $page_url); //배열로 변환

    $page_url_length = count($page_url_arr)-1; // 배열의 길이 구함 

    $last_url_length = strpos($page_url_arr[$page_url_length],'.php');

    $page_url_arr[$page_url_length] = substr($page_url_arr[$page_url_length], 0, $last_url_length);
    
    $re_sg_01 = $page_url_arr[2];
    $re_sg_02 = $page_url_arr[3];
    $re_sg_03 = $page_url_arr[4];
    // $re_sg_03 = $page_url_arr[];

    // $re_sg_01 = request()->segment(1);
    // $re_sg_02 = request()->segment(2);
    // $re_sg_03 = request()->segment(3);

    switch ($re_sg_01) {
        case 'intro':
            $dep01_title = '회사소개';
            break;
        case 'rd':
            $dep01_title = 'R&D';
            break;
        case 'partner':
            $dep01_title = '파트너쉽';
            break;
        case 'board':
            $dep01_title = '공지사항';
            break;
        case 'employ':
            $dep01_title = '인재채용';
            break;
        case 'contact':
            $dep01_title = 'Contact';
            break;
        default:
            $dep01_title = '';
            break;
    }

    switch ($re_sg_02) {
        case 'summary':
            $dep02_title = '회사개요';
            break;
        case 'greeting':
            $dep02_title = 'CEO 인사말';
            break;
        case 'mission':
            $dep02_title = 'Vision & Mission';
            break;
        case 'ci':
            $dep02_title = 'CI 소개';
            break;
        case 'history':
            $dep02_title = '연혁';
            break;
        case 'intro':
            $dep02_title = '연구소 소개';
            break;
        case 'immune':
            $dep02_title = '면역세포 치료제';
            break;    
        case 'antibodies':
            $dep02_title = '항체/단백질 치료제';
            break;
        case 'pipeLine':
            $dep02_title = '파이프라인';
            break;
        case 'cooperation':
            $dep02_title = '연구협력';
            break;
        case 'company':
            $dep02_title = '주요투자사';
            break;
        case 'noticeList':
            $dep02_title = '공지사항';
            break;
        case 'noticeView':
            $dep02_title = '공지사항';
            break;
        case 'newsList':
            $dep02_title = 'News';
            break;
        case 'newsView':
            $dep02_title = 'News';
            break;
        case 'info':
            $dep02_title = '채용정보';
            break;
        case 'employList':
            $dep02_title = '채용공고';
            break;
        case 'employView':
            $dep02_title = '채용공고';
            break;
        case 'question':
            $dep02_title = '문의하기';
            break;
        case 'map':
            $dep02_title = '오시는 길';
            break;
        default:
            $dep02_title = '준비중';
            break;
    }



?>
<?php }?>
<?php if($lang_type == 'en'){ ?>
<?php
    $dep01_title = '';
    $dep02_title = '';
    $dep03_title = '';

    $page_url = $_SERVER['REQUEST_URI']; //
    $page_url_arr = explode('/', $page_url); //배열로 변환

    $page_url_length = count($page_url_arr)-1; // 배열의 길이 구함 

    $last_url_length = strpos($page_url_arr[$page_url_length],'.php');

    $page_url_arr[$page_url_length] = substr($page_url_arr[$page_url_length], 0, $last_url_length);
    
    $re_sg_01 = $page_url_arr[2];
    $re_sg_02 = $page_url_arr[3];
    $re_sg_03 = $page_url_arr[4];
    // $re_sg_03 = $page_url_arr[];

    // $re_sg_01 = request()->segment(1);
    // $re_sg_02 = request()->segment(2);
    // $re_sg_03 = request()->segment(3);

    switch ($re_sg_01) {
        case 'intro':
            $dep01_title = 'ABOUT US';
            break;
        case 'rd':
            $dep01_title = 'R&D';
            break;
        case 'partner':
            $dep01_title = 'PARTNERSHIP';
            break;
        case 'board':
            $dep01_title = 'NOTICE';
            break;
        case 'employ':
            $dep01_title = 'CAREER';
            break;
        case 'contact':
            $dep01_title = 'CONTACT';
            break;
        default:
            $dep01_title = '';
            break;
    }

    switch ($re_sg_02) {
        case 'summary':
            $dep02_title = 'Company Overview';
            break;
        case 'greeting':
            $dep02_title = 'CEO Greetings';
            break;
        case 'mission':
            $dep02_title = 'Vision & Mission';
            break;
        case 'ci':
            $dep02_title = 'About CI';
            break;
        case 'history':
            $dep02_title = 'History';
            break;
        case 'intro':
            $dep02_title = 'About the lab';
            break;
        case 'immune':
            $dep02_title = 'Immune Cell Therapy';
            break;    
        case 'antibodies':
            $dep02_title = 'Antibody Therapy';
            break;
        case 'pipeLine':
            $dep02_title = 'Pipeline';
            break;
        case 'cooperation':
            $dep02_title = 'Research Cooperation';
            break;
        case 'company':
            $dep02_title = 'Major Investors';
            break;
        case 'noticeList':
            $dep02_title = 'Notice';
            break;
        case 'noticeView':
            $dep02_title = 'Notice';
            break;
        case 'newsList':
            $dep02_title = 'News';
            break;
        case 'newsView':
            $dep02_title = 'News';
            break;
        case 'info':
            $dep02_title = 'Jobs';
            break;
        case 'employList':
            $dep02_title = 'Job Posting';
            break;
        case 'employView':
            $dep02_title = 'Job Posting';
            break;
        case 'question':
            $dep02_title = 'Contact us';
            break;
        case 'map':
            $dep02_title = 'Maps';
            break;
        default:
            $dep02_title = 'Ready';
            break;
    }



?>
<?php }?>
<div id="mqSub">
    <div class="visual <?=($page_url_arr[3])?>">
        
    </div>
    <nav id="mqSubNavi"  class="c-inner">
        <ul class="parent flex-box inner" data-liststyle="none">
            <li class="home-data p-d"><a href="/"><img src="/img/inc/home.png" alt="홈"/></a></li>
            <li class="parent-data p-d">
            <?php if($page_url_arr[2] == info){ ?>
                <a href="/cont/intro/summary.php" class="parent-link p-link txt18">기업정보</a>
            <?php } ?>
            <?php if($page_url_arr[2] == rd){ ?>
                <a href="/cont/rd/intro.php" class="parent-link p-link txt18">R&D</a>
            <?php } ?>
            <?php if($page_url_arr[2] == partner){ ?>
                <a href="/cont/partner/cooperation.php" class="parent-link p-link txt18"><?=$lang_msg['parent02']?></a>
            <?php } ?>
            <?php if($page_url_arr[2] == board){ ?>
                <a href="/cont/board/noticeList.php" class="parent-link p-link txt18"><?=$lang_msg['parent03']?></a>
            <?php } ?>
            <?php if($page_url_arr[2] == employ){ ?>
                <a href="/cont/employ/info.php" class="parent-link p-link txt18"><?=$lang_msg['parent04']?></a>
            <?php } ?>
            <?php if($page_url_arr[2] == contact){ ?>
                <a href="/cont/contact/question.php" class="parent-link p-link txt18">Contact</a>
            <?php } ?>
            </li>
            <?php if($page_url_arr[3] != null){ ?>
            <li class="child-data p-d">
                <a href="javascript:void(0);" class="parent-link p-link txt18 active"><?=($dep02_title)?></a>
            </li>
            <?php } ?>
            <?php if($page_url_arr[4] != null){ ?>
            <li class="tail-data p-d">
                <a href="javascript:void(0);" class="parent-link p-link txt18"><?=($dep03_title)?></a>
            <li>
            <?php } ?>
        </ul>
    <script>
        $(document).ready(function(){
            $('.parent-data').click(function(){
                $(this).children('ul').slideToggle();
                $('.child-data-box').slideUp();    
                $('.tail-data-box').slideUp();
            })

        })

        $(document).ready(function(){
            $('.child-data').click(function(){
                $(this).children('ul').slideToggle();
                $('.parent-data-box').slideUp();    
                $('.tail-data-box').slideUp();
            })
        })
        
        $(document).ready(function(){
            $('.tail-data').click(function(){
                $(this).children('ul').slideToggle();
                $('.parent-data-box').slideUp();    
                $('.child-data-box').slideUp();
            })
        })

        
        
        $('html').click(function(e){
            if(!$(e.target).hasClass('p-link')){
                $('.parent-data-box').slideUp();
                $('.child-data-box').slideUp();
                $('.tail-data-box').slideUp();
            } 
        });
    </script>
</nav>
</div>