<?php

$exit = '';
if(isset($_POST['type'])) {

    $products = json_decode(file_get_contents('../products.json'), true);

    $array = array(
        'type' => $_POST['type'],
        'products' => $products[$_POST['type']]
    );

    $exit = json_encode($array);

}
exit($exit);
