<?php
$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'todolistdb');
if($conn)
{
    echo "connected";
}
else 
echo "connection fail";
    ?>