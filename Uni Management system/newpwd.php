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
    <h1>Change Password</h1>
   <form method="POST" >
    <table>
    <tr>
    <td>Enter your existing password:</td>
    <td><input type="password" name="old_pass"></td>
    </tr>
  <tr>
    <td>Enter your new password:</td>
    <td><input type="password" name="new_pass"></td>
    </tr>
    
    </table>
    <p><input type="submit" name = "submit" value="Submit">
    </form>
   </body>
   <div>
   <?php
session_start();
if (isset($_POST['submit'])) {
  
$user_id = $_SESSION['username'];
 $old_pass = $_POST['old_pass'];
$new_pass = $_POST['new_pass'];

include("config.php");
$sql = mysqli_query($conn, "SELECT password
                                  FROM login WHERE user_name ='".$user_id."'");
while($row = mysqli_fetch_array($sql)){ 
$old_pass = $row['password'];
$password = $new_pass;
$hash = hash ('md5', $password);

mysqli_query($conn, "UPDATE login SET password = '".$hash."' WHERE user_name='".$user_id."'");
}
}
      ?>
 </div>
</body>
</html>
