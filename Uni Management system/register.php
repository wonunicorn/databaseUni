<?php

$host = "localhost";
$user = "root";
$password = "12345";
$dbname = "uni";
$conn = mysqli_connect($host, $user, $password,$dbname);

$sql1 = "select id from student order by (id) asc";
$result1 = mysqli_query($conn, $sql1);

$query = "select course_id from course order by (course_id) asc";
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
  <form  method="post">
      
      
        <label> Student ID: </label>
        <select name = "id" value = "ID">
          <option> ID </option>
            <?php
            while($row1 = mysqli_fetch_assoc($result1)):;?>
            <option> <?php echo $row1["id"];?></option>
            <?php endwhile; ?>
        </select>
        
            <br/>
        <label> Course ID: </label>
        <select name = "course_id" value = "course_id">
          <option> Course</option>
        <?php
            while($row1 = mysqli_fetch_assoc($result2)):;?>
            <option> <?php echo $row1["course_id"];?></option>
            <?php endwhile; ?>
        </select>
        <br/>

       <input name="submit" type="submit" value="Save">
       </form>
      <?php 
        if(isset($_POST['submit'])){
          $id = $_POST['id'];
          $course_id = $_POST['course_id'];
          $sql="INSERT IGNORE INTO takes(ID, course_id) values ('$id', '$course_id')"  or die (mysqli_error());
          mysqli_query($conn,$sql);
        }
        ?>
      
       
  </div>
</body>
</html>