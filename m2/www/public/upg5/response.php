<?php

include("inc/cleaner.php");

mb_internal_encoding("UTF-8");
$data = [];

foreach ($_POST as $key => $value) {
    if (isset($value) and !empty($value)) {
        if (!mb_check_encoding($value)) {
            header('Location: index.php');
            exit();
        }
        $data[$key] = cleanData($value);
    } else {
        header('Location: index.php');
        exit();
    }

    if ($key != "password2") {
        echo ($value . "<br>");
    }
}
