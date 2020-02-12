<?php


$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = "12345"; /* Password */
$dbname = "uni"; /* Database name */

$conn = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
?>