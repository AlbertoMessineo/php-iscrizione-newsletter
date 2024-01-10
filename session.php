<?php
session_start();

$_SESSION['email'] = $_GET['input-email']; 

// echo $_SESSION['email'];