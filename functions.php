<?php
require_once __DIR__ . '/session.php';

$correct_mail = null;
if ($_SESSION['email']) {
    if (str_contains($_SESSION['email'], "@") && (str_contains($_SESSION['email'], "."))) {
        $correct_mail = true;
        header('Location: log-in.php');
    } else {
        $correct_mail = false;
    }
}