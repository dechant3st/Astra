<?php
session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
echo "Correct Code Entered";
//Do you stuff

$cookie_name = "captchacheck";
$cookie_value = "ok";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
   header('Location: download.html');
}
else
{
die("Wrong Code Entered");
}
?><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

