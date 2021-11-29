<?php
 if(isset($about)){

    $lang_links = array(
        1 =>'http://localhost/WholecakeGroup/about.php?l=ar',
        2 =>'http://localhost/WholecakeGroup/about.php?l=en',
    );
    }
    elseif(isset($services)){
    $lang_links = array(
        1 =>'http://localhost/WholecakeGroup/services.php?l=ar',
        2 =>'http://localhost/WholecakeGroup/services.php?l=en',

    );
    }else{
    ;$lang_links = array(
        1 =>'http://localhost/WholecakeGroup/index.php?l=ar',
        2 =>'http://localhost/WholecakeGroup/index.php?l=en',
    );
}
?>