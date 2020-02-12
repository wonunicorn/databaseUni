<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf-8">
  <title> UNIVERSITY</title>
  <link href = "3.css" rel= "stylesheet" type = "text/css"/>
</head>
<body>
  <center>
 
  <br/>
  <form>
    <table>
      <tr> 
        <td id = "button" align = "center"><a href = "logout.php"> Log out</a>  </td>
        <td id = "button" align = "center"> <a href = "newpwd.php"> Change Password</a></td>
      </tr>
    </table>
    </form>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
</center>

  <div id = "new">
      <?php
       session_start();
    include("config.php");
    
    $user = $_SESSION['username'];

      $sql = "SELECT ID, user_name, email FROM login WHERE `user_name` = '$user'";
      $result = $conn->query($sql);

  
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {  }
}
        $sql = "select i.ID, i.fname, i.lname, i.dept_name FROM instructor as i, login as l WHERE l.ID = i.ID AND l.user_name = '$user' ";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            echo "<strong> My information: </strong><br/>";
            echo " <em> ID: </em> $row[ID] <br/>";
            echo  " <em> Name: </em> $row[fname]<br/>";
            echo  " <em> Surname: </em> $row[lname]<br/>";
            echo  " <em> Department: </em> $row[dept_name]<br/>";
            echo "<hr width = '90%'/>";
                }
        
         $sql = "select  t.ID,  t.course_id, c.title, c.dept_name, c.credits
        FROM course as c, teaches as t, login as l 
        WHERE `user_name` = '$user' AND t.course_id = c.course_id and t.ID = l.ID";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
        echo "<strong> My courses: </strong><br/>";
        
                while($row = $result->fetch_assoc()) {
                echo  " <em> Course ID: </em>$row[course_id]<br/>";
                echo  " <em> Title: </em>$row[title]<br/>";
                echo "<em> Department: </em>$row[dept_name]<br/>";
                echo "<em> Credits: </em>$row[credits]<br/>";
              }
            }
        $sql = "select DISTINCT ta.ID
        FROM course as c, teaches as t, login as l, takes as ta 
        WHERE `user_name` = '$user' AND t.course_id = c.course_id and t.ID = l.ID AND ta.course_id = t.course_id";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
      
         echo "<em> Registered students: </em><br/>";
                while($row = $result->fetch_assoc()) {
               
            echo    "$row[ID]<br/>";
                }echo "<hr width = '90%'/>";
        }

}
      


      
      
    ?>
     <h3><a href = "register.php" >Register student to course</a></h3>   
    <div>
</body>
</html>