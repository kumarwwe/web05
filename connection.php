<?php
$sname="localhost";
$uname="root";
$password="";
$bd_name="students";
$con=mysqli_connect($sname, $uname,$password,$bd_name);
if(!$con){
    echo"connection fail!";

}



?>