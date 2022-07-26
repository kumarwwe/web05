<?php
include 'connection.php';


?>

<!DOCTYPE html>
<html>
<li><a href="Dashboard.html">Back</a></li>
<body>
<div class="container">

<button type="button" class="btn"><a href="information.php">Add User</a></button>



<table  class ="table" >

      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone </th>
        <th>Operations</th>
        
      </tr>
      <style>
       button {
       

float:left;


font-size: 20px;
}
.btn{

color: darkblue;
}
.btn1{

color: rgb(14, 220, 20);
}
.btn2{

color: rgb(237, 14, 14);
}


        
      
table, td, th {
  border: 1px solid black;
  background-attachment: fixed;
  
}

table {
  border-collapse: collapse;
  width: 80%;
  margin: 165px;
  
  
}

th {
  height: 50px;
  
}

</style>

<?php
$sql="Select*from  studentsinfo";
$result=mysqli_query($con, $sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $address=$row['address'];
        $phone=$row['phone'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <th >'.$name.'</th>
        <th>'.$email.'</th>
        <th>'.$address.'</th>
        <th>'.$phone.'</th>

        <th>
        <button class="btn1"><a href="update.php ? updateid='.$id.'" class="text-light " >Update</a></button>
        <button class="btn2" ><a href="delete.php? deleteid='.$id.'" class="text-primary" > Delete</a></button>
  
       </th>
        
        </tr>';
       
       

    
}
}
?>


</table>
 
<style>
.btn1 {background-color: #FFFFFF;}
.btn2 {background-color: #FF0000;}
.btn{background-color:  #00FF00;}
.text-primary{
  background-color: #FF0000;
}

.btn2{


}


  </style>
 <script>

   function checkdelete(){

    return Confirm('Are you sure');
   }
   </script>


  
</body>
</html>