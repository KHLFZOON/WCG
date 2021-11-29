<?php

    $navLang = array(
        1 => 'Home',
        2 => 'About us',
        3 => 'Services',
    );
    if(isset($_GET['l']) && $_GET['l'] = 'en'){

    $navLinks = array(
        1 => 'https://localhost/WholeCakeGroup',
        2 => 'https://localhost/WholeCakeGroup/about.php',
        3 => 'https://localhost/WholeCakeGroup/services.php',
    );
}
elseif(!isset($_GET['l']) || $_GET['l'] != 'ar' || $_GET['l'] != 'en'){
    $navLinks = array(
        1 => 'https://localhost/WholeCakeGroup/index.php?l=en',
        2 => 'https://localhost/WholeCakeGroup/about.php?l=en',
        3 => 'https://localhost/WholeCakeGroup/services.php?l=en',
    );
}
    $footerLang = array(
        1 =>'Terms and Conditions',
    );

  
?>