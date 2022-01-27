<?php
    $line_num = $_GET['line'];
    $file_arr = file('db.txt');

    unset($file_arr[$line_num - 1]);

    $new_contnet = implode(PHP_EOL, $file_arr);

    file_put_contents('db.txt', $new_contnet);

    //redirect list page
    header('Location: list.php');
    exit();
    