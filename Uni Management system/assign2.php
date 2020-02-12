<?php

$host = "localhost";
$user = "root";
$password = "12345";
$dbname = "uni";
$conn = mysqli_connect($host, $user, $password,$dbname);

$sql1 = "select id from student order by (id) asc";
$result1 = mysqli_query($conn, $sql1);

$query = "select ID from instructor order by (ID) asc";
$result2 = mysqli_query($conn, $query);
 

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf-8">
  <title> UNIVERSITY</title>
  <link href = "3.css" rel= "stylesheet" type = "text/css"/>
</head>
<body>
  <center>

  <form id = "button">
   <a href = "logout.php"> Log out</a> 
    </form>
</center>

  <div id = "new">
       <form  method="POST">
        
       
       <label> Student ID: </label>
        <select name = "s_ID" value = "s_ID">
          <option> ID </option>
            <?php
            while($row1 = mysqli_fetch_assoc($result1)):;?>
            <option> <?php echo $row1["id"];?></option>
            <?php endwhile; ?>
        </select>
        
            <br/>
        <label> Instructor ID: </label>
        <select name = "i_ID" value = "i_ID">
          <option> ID</option>
        <?php
            while($row1 = mysqli_fetch_assoc($result2)):;?>
            <option> <?php echo $row1["ID"];?></option>
            <?php endwhile; ?>
        </select>
        <br/>

       <input name="submit" type="submit" value="Save">
       </form>
      <?php 
        if(isset($_POST['submit'])){
          $i_ID = $_POST['i_ID'];
          $s_ID = $_POST['s_ID'];
          $sql="INSERT IGNORE INTO  advisor(s_ID, i_ID) values ('$s_ID', '$i_ID')"  or die (mysqli_error());
          mysqli_query($conn,$sql);
        }
        ?>
       
        
    <div>
</body>
</html>