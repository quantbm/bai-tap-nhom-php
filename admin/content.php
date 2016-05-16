<?php

if (! empty($_GET)) {
    $page = array_keys($_GET)[0]; // phone
    $pageValue = $_GET[$page]; //$_GET['phone']

    $indexPath = $page.'/index.php';
    $featurePath = $page.'/'.$pageValue.'.php';

    if ( file_exists($featurePath) )
        require($featurePath);
    else if ( file_exists($indexPath) )
        require($indexPath);
}

?>
