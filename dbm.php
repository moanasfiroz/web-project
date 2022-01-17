<?php
include 'dbms.php';

if (isset($_POST['Name'])) {

 $Name  = $_POST['Name'];
 $Date  = $_POST['Date'];
 $Age = $_POST['Age'];
 $Member = $_POST['Member'];
 $Phone = $_POST['Phone'];
 $page = $_POST['page'];
 

 // enter insert query here
 $sql = "INSERT into `project` values('$Name','$Date','$Age','$Member','$Phone')";

 
//  echo $sql;
 $result = mysqli_query($conn, $sql);

 
 

 
 header('Location: ' . $page);{

 die();
 }
 ?>
<?php

 // Set error reporting level to all errors
 error_reporting(E_ALL);

 // View php.ini and look for the mail settings
 phpinfo();
  

 
}