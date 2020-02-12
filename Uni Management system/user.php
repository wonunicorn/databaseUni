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
   <?php
   session_start();
   include("config.php");
   function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

   return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
}
echo clean('$user');
   if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM `login` WHERE `user_name` = '$user' and `password` = md5('$pass')";

    $result = $conn->query($query);
       $_SESSION['username'] = $_POST['username'];
       $_SESSION['password'] = $_POST['password'];

    $sql = "SELECT * FROM `login` WHERE `user_name` = '$user' and `password` = md5('$pass')";

   $row = $result->fetch_assoc();
    if ($result->num_rows > 0){
      if ($row['status'] == 's') {
        header("Location:std.php");
      }
      else if ($row['status'] == 'i'){
        header("Location:ins.php");
      }
      else header("Location:fac.php");
    }

// $query1 = "select user_name FROM login WHERE `user_name` = '$user' AND `user_name` LIKE 'std%'";

//  $query2 = "select user_name FROM login WHERE `user_name` = '$user' AND `user_name` LIKE 'ins%'";
 
//  $query3 = "select user_name FROM login WHERE `user_name` = '$user' AND `user_name` LIKE 'fac%'";
 
   //  if($result->num_rows > 0) {
    
       

        
   //      if($query1){
   //        echo "$query1";
   //        //header("Location:std.php");
   //      }
   //      else if($query2){
          
   //        //header("Location:ins.php");
   //        echo "$query2";
   //      }
   //     else{
   //      echo "$query3";
   //       // header("Location:fac.php");
   //      }
   // }
   else {
   
     if(empty(trim($_POST["username"]))){
       echo "<script>alert('Please enter a username.'); window.location='index.php'</script>";  
    } 
    if(empty(trim($_POST["password"]))){
       echo "<script>alert('Please enter a password.'); window.location='index.php'</script>";    }
    else {
      echo "<script>alert('Incorrect username or password.'); window.location='index.php'</script>"; 
    }
    // header('Location:index.php');
  }

 
  $conn->close();
}

?>

</div>
</body>
</html>
