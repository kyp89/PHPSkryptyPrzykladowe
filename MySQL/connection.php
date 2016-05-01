<?php
require_once 'login.php';

$conn=new mysqli($hn,$un,$up,$db);

$querty = "select * from classics";

$result = $conn->query($querty) ;

$rows=$result->num_rows;

for($i=0;$i<$rows;$i++)
{
    $row = $result->fetch_array(MYSQLI_ASSOC);
    
    echo $row['author'].'<br/>';
    echo $row['title'].'<br/>';
    echo $row['isbn'].'<br/>';
    echo '<hr/>';
    
   // echo $result->fetch_assoc()['author'].'<br/>';
}
$result->close();
$conn->close();
/*
while($row = $result->num_rows>0)
{
    echo $row['isbn'].'<br/>';
}*/