<?php 
    if(isset($_POST['save'])){
        $hostname="localhost"; 
        $username="root";
        $password="12345";
        $database="uni";
        $con = new mysqli($hostname,$username,$password,$database);
        mysqli_select_db($con,$database);
        
        $course_id = $_POST['course_id'];
        $title = $_POST['title'];
        $dept_name = $_POST['dept_name'];
        $credits = $_POST['credits'];

        $sql = "insert ignore into course(course_id, title, dept_name, credits) values  ('$course_id', '$title', '$dept_name', '$credits')" or die (mysqli_error());
        mysqli_query($con, $sql);
        mysqli_close($con);
    }
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
<form id = "new" method = "post">
        <h3> Enter the information: </h3> 
        <table >
        <tr> 
            <td> Course ID: </td>
            <td> <input type = "text" name = "course_id" placeholder = "ID.." value=""></td>
        </tr>
         <tr>
             <td> Course title: </td>
             <td> <input type = "text" name = "title" placeholder = "Title.." value=""></td>
         </tr>
         <tr>
             <td> Department: </td>
             <td><input type = "checkbox" name = "dept_name" value = "Architecture"> Architecture </td>
        </tr>
        <tr>
            <td> </td>
            <td><input type = "checkbox" name = "dept_name" value = "Banking and Finance"> Banking and Finance </td>
        </tr>
        <tr>
            <td> </td>
            <td><input type = "checkbox" name = "dept_name" value = "Business"> Business </td>
        </tr>
        <tr>
            <td> </td>
            <td> <input type = "checkbox" name = "dept_name" value = "International Relation"> International Relation</td>
        </tr>
        <tr>
            <td> </td>
            <td> <input type = "checkbox" name = "dept_name" value = "Civil Engineering"> Civil Engineering</td>
        </tr>
        <tr>
            <td> </td>
            <td><input type = "checkbox" name = "dept_name" value = "Computer Engineering"> Computer Engineering </td>
        </tr>
        <tr>
            <td> </td>
            <td> <input type = "checkbox" name = "dept_name" value = "Electrical & Electronics Engineering"> Electrical & Electronics Engineering</td>
        </tr>
        <tr>
            <td> </td>
            <td><input type = "checkbox" name = "dept_name" value = "Software Engineering"> Software Engineering </td>
        </tr>
        <tr>
            <td> </td>
            <td> <input type = "checkbox" name = "dept_name" value = "Law"> Law</td>
        </tr>
        <tr>
            <td> </td>
            <td><input type = "checkbox" name = "dept_name" value = "Tourism"> Tourism </td>
        </tr>
        <tr>
            <td> Credits: </td>
            <td><input type="number" name="credits" min="1" max="4" value = "credits"></td>
        </tr>
          </table>
            <input class = "submit" name = "save" type="submit" value = "Save">
    </form> 
</body>
</html>