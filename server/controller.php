<?php
    include __DIR__ . '/data.php';

    header('Content-Type: application/json');

    echo json_encode(
        [
            "results" => $albums,
            "length" => count($albums),
        ]
    );
?>