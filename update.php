<?php
include 'connection.php';
$id=$_GET['updateid'];
$sql="select*from studentsinfo  where id=$id";

$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name= $row['name'];
$email= $row['email'];
$address= $row['address'];
$phone= $row['phone'];



if(isset($_POST['submit'])){
 $name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$sql= "update  studentsinfo set id=$id, name='$name', email='$email', address='$address', phone='$phone' where id='$id'";
$result= mysqli_query($con,$sql);

if($result){
    header('location:display.php');
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
   
       
        <h1>Update the student's Info</h1>
        <form id="add"  method="post"  >
        <link rel="stylesheet" type="text/css"  href="styll.css">
        
            <label>Name:</label><br>
            <input type ="text" name="name" value=<?php echo $name;?>>
            <br>


            <label>Email:</label><br>
            <input type ="email" name="email"  value=<?php echo $email;?>>
             <br>

            <label>Address:</label><br>
            <input type ="text" name="address" value=<?php echo $address;?>>
            <br>
                

            <label>Phone:</label><br>
            <input type ="number" name="phone" value=<?php echo $phone;?>>
           <br> <br>

           <button type="submit" name="submit">Update</button>
            



        </form>
    </div>
</div>
</html>
