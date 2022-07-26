<?php
$sname="localhost";
$uname="root";
$password="";
$bd_name="testdb";
$conn=mysqli_connect($sname, $uname,$password,$bd_name);
if(!$conn){
    echo"connection fail!";

}
else{
    echo"hi";
}





?>