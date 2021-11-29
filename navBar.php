<?php
if(isset($_GET['l']) && $_GET['l'] == 'ar'){
include('config/ar.php');
}
elseif(isset($_GET['l']) && $_GET['l'] == 'en'){
include('config/en.php');
}
elseif(!isset($_GET['l'])){
include('config/en.php');
}
include('config/links_mixed_lang.php');

?>
<nav>
    <img onclick="Open()" id='menu'src="app/icons/Menu.svg" alt="" srcset="">
    <aside>
        <div id='aside_links_con'>
        <div id="close" onclick="Close()">
            &times;
        </div>
        <a href="<?php echo $navLinks[1]?>"><?php echo $navLang[1]?></a>
        <a href="<?php echo $navLinks[2]?>"><?php echo $navLang[2]?> </a>
        <a href="<?php echo $navLinks[3]?>"><?php echo $navLang[3]?></a>
        </div>
    </aside>
    <img id='logo'src="app/icons/logo_1.png" alt="" srcset="">
<div id="links_con_con">
    <div id="links_con">
        <a href="<?php echo $navLinks[1]?>"><?php echo $navLang[1]?></a>
        <a href="<?php echo $navLinks[2]?>"><?php echo $navLang[2]?> </a>
        <a href="<?php echo $navLinks[3]?>"><?php echo $navLang[3]?></a>
    </div>
</div>    
</nav>
<style>
    @font-face {
        font-family: 'Maven';
        src: url('app/fonts/Maven/static/MavenPro-Regular.ttf');
    }#menu{
        display: none;
    }aside{
        display: none;
    }
    nav #logo{
        width: 140px;
        position: absolute;
        top:15px;
        left: 40px;
    }
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Maven';
    }
    nav{
        width: 100%;
        height: 60px;
        background: white;
        box-shadow: 0 1px 10px #d4d4d4;
        position: fixed;
        z-index: 10;
    }#links_con_con{
        /* background: blue; */
        position:relative;
        width: 60%;
        top: 0px;
        height: 60px;
        /* border: 1px solid red; */
       float: right;
    }#links_con_con a{
        color: #333;
        text-decoration: none;
        font-size: 22px;
        position: relative;
        top: 15px;
        margin-left: 40px;
        left: 0px;

    }#links_con{
        position: relative;
        height: 60px;
        width: 100%;
        float: right;
        text-align: right;
        right: 20px;
        /* text-align: center; */
    }@media screen and (max-width:740px){
        #aside_links_con{
            display: none;
        }
        aside{
            display: unset;
            position:fixed;
            width: 0%;
            top: 0px;
            transition: 0.10s;
            z-index: 20;
            left: 0px;
            height: 100%;
            background:rgba(247, 247, 247, 0.664);
            backdrop-filter: blur(20px);
            text-align: center;

        }aside a{
            color: black;
            display: block;
            font-size: 25px;
            text-decoration: none;
            margin-top: 60px;
            top: 200px;
            position: relative;
            /* left: 35%; */
        }
        nav{
            width: 100%;
        }
        nav #links_con_con{
            display: none;
        }nav #logo{
            position: relative;
            left: 50%;
            transform: translate(-50%);
        }nav #menu{
            z-index: 10;
            display: unset;
            position: absolute;
            top: 18px;
            left: 20px;
            width: 30px;
        }#close{
            color: black;
            left: 85%;
            font-size: 50px;
            position: absolute;
            top: 100px;
        }
    }
    
</style>
<script src="app/js/SlideMenu.js"></script>