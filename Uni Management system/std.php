
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
    
    while($row = $result->fetch_assoc()) {   }

}

      
        $sql = "select student.id, student.fname, student.lname ,student.dept_name FROM student, login WHERE login.user_name = '$user' AND login.ID = student.id";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<strong> My information: </strong><br/>";
            echo " ID: $row[id] <br/>";
            echo  " Name: $row[fname]<br/>";
            echo  " Surname: $row[lname]<br/>";
            echo  " Department: $row[dept_name]<br/>";
            echo "<hr width = '90%'/>";
          }
        }
       
          $sql = "select distinct t.ID, t.course_id, c.title FROM course as c, takes as t, login as l WHERE `user_name` = '$user' AND t.ID = l.ID AND c.course_id = t.course_id";
          $result = $conn->query($sql);
          if($result->num_rows > 0) {
            echo "<strong> My courses:</strong><br/>";
            while($row = $result->fetch_assoc()) {
            echo " $row[course_id] - $row[title] <br/>";
             }
          }
          
          $sql = "select t.ID
          from takes as t
          where t.course_id in (select p.course_id
                  from takes as p, login as l
                  where l.user_name = '$user' and l.id = p.id)";
          $result = $conn->query($sql);
          if($result->num_rows > 0) {
            echo "This course also takes: <br/>";
            while($row = $result->fetch_assoc()) {
            echo "$row[ID] <br>";
             }
          }
      
      ?> 
</div>
  
</body>
</html>