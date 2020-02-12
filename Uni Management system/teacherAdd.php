<?php 
if(isset($_POST['save'])){
    $hostname="localhost"; 
    $username="root"; 
    $password="12345";
    $database="uni";
    $con = new mysqli($hostname,$username,$password,$database);
    mysqli_select_db($con,$database);

    $ID = $_POST['ID'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dept_name = $_POST['dept_name'];
    $sql="INSERT IGNORE INTO  instructor(ID, fname, lname,dept_name) values ('$ID', '$fname', '$lname', '$dept_name')"  or die (mysqli_error());
    mysqli_query($con,$sql);
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

<form id = "new"  method = "post">
        <h3> Enter the information: </h3> 
        <table >
        <tr> 
            <td>ID: </td>
            <td> <input type = "text" name = "ID" placeholder = "ID.."></td>
        </tr>
         <tr>
             <td> Name: </td>
             <td> <input type = "text" name = "fname" placeholder = "Name.."></td>
         </tr>
         <tr>
             <td> Surname: </td>
             <td> <input type = "text" name = "lname" placeholder = "Name.."></td>
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
          </table>
            <input class = "submit" type = "submit" name = "save" value = "Save">
    </form> 
</body>
</html>