<?php

include('db_connect.php');

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $deleteStatmet = $mySqli->prepare("DELETE FROM articles WHERE id= ? LIMIT 1");
    $deleteStatmet->bind_param("i",$id);
    $deleteStatmet->execute();
    $deleteStatmet->close();
    header("Location:GetPost.php");
    
}

