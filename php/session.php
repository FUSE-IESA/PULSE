<?php 

session_start();

if (!isset($_SESSION['css']))
    $i = 1;
else
    $i=$_SESSION['css'];

if($i == 2)
    $a = '-nuit';

