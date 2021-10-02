<?php

function printer($arr, $exit_flag = false) {
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    if($exit_flag) exit();
}

function safely_start_session() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

function redirect($url, $msg=NULL) {
    if($msg) {
        safely_start_session();
        $_SESSION['msg'] = $msg;
    }
    header("Location: $url");
    exit();
}

function is_logged_in() {
    safely_start_session();
    if(isset($_SESSION['user_email'])) return true;
    else return false;
}

