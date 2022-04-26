<?php
    include __DIR__ . '/data.php';

    header('Content-Type: application/json');

    function filter($var){
        return strtolower($var['genre']) == strtolower($_GET['genre']);
    }

    $result= [];

    if(!empty($_GET) && !empty($_GET['genre'] && $_GET['genre'] != 'All')){
        $result = 
            [
                "results" => array_filter($albums, "filter"),
                "length" => count(array_filter($albums, "filter")),
            ];
    }else {
        $result = 
            [
                "results" => $albums,
                "length" => count($albums),
            ];
    }

    echo json_encode($result);
?>