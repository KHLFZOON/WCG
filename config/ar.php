<?php
    $navLang = array(
        1 => 'الصفحه الرئيسية',
        2 => 'من نحن',
        3 => 'الخدمات',
    );
    if(isset($_GET['l']) && $_GET['l'] = 'ar'){
    $navLinks = array(
        1 => 'https://localhost/WholeCakeGroup/index.php?l=ar',
        2 => 'https://localhost/WholeCakeGroup/about.php?l=ar',
        3 => 'https://localhost/WholeCakeGroup/services.php?l=ar',
    );
    }elseif(!isset($_GET['l']) || $_GET['l'] != 'ar' || $_GET['l'] != 'en'){
        $navLinks = array(
            1 => 'https://localhost/WholeCakeGroup/index.php?l=en',
            2 => 'https://localhost/WholeCakeGroup/about.php?l=en',
            3 => 'https://localhost/WholeCakeGroup/services.php?l=en',
        );
    }
    $footerLang = array(
        1 =>'الشروط و الاحكام',
    );
?>