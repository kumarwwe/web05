<?php
include 'connection.php';

if(isset($_POST['submit'])){
 $name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$sql= "INSERT INTO studentsinfo (name, email, address,phone) values('$name', '$email','$address','$phone')";
$result= mysqli_query($con,$sql);

if($result){
    header('location:display.php');
exit();
   

}
else{
die(mysqli_error($con));
}
}


?>
<html>
<head></head>

<div class="main">
    <div class="add">
   
       
        <h1>Add The Students</h1>
        <form id="add"  method="post"  >
        <link rel="stylesheet" type="text/css"  href="styll.css">

        
            <label>Name:</label><br>
            <input type ="text" name="name">
            <br>


            <label>Email:</label><br>
            <input type ="email" name="email">
             <br>

            <label>Address:</label><br>
            <input type ="text" name="address">
            <br>
                

            <label>Phone:</label><br>
            <input type ="number" name="phone">
           <br> <br>

           <button type="submit" name="submit"  >Submit</button>
            
         


        </form>
    </div>
</div>
</html>
