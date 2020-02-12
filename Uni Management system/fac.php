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
    <hr width = '90%'/>
    <table  style = 'width:90%' padding = 15>
      <tr>
        <th > ADD: </th>
        <th> ASSIGN: </th>
        </tr>
        <tr>
        <td align = 'center'> <a href = 'studentAdd.php'> student </a></td>
        <td align = 'center'> <a href = 'assign1.php'> courses to teacher </a></td>
        </tr>
        <tr>
        <td align = 'center'> <a href = 'courseAdd.php'> course</a></td>
        <td align = 'center'> <a href = 'assign2.php'> instructor to student </a></td>
        </tr>
        <tr>
        <td align = 'center'> <a href = ' teacherAdd.php'> teacher </a></td>
        </tr>
      </table>
      <hr width = '90%'/>
  <?php
    session_start();
    include("config.php");
    
    $user = $_SESSION['username'];
    $sql = "SELECT ID, user_name, email FROM login WHERE `user_name` = '$user'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {   }
    }
       
  ?>      
  <div>
</body>
</html>