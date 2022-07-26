<?php
$sname="localhost";
$uname="root";
$password="";
$bd_name="adminlogin";
$conn=mysqli_connect($sname, $uname,$password,$bd_name);
if(!$conn){
    echo"connection fail!";

}






?>