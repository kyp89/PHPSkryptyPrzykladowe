<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

echo session_status();

/*
if(function_exists('session_start')){
    echo 'ok';
    echo  session_start();
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
}else
{echo 'false';}*/