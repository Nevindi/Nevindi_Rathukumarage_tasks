<?php include 'db.php' ;
$fname= $_POST['first_name'];
$lname= $_POST['last_name'];
$city= $_POST['city'];
$groupid= $_POST['groupId'];
$sql="insert into studentsinfo (first_name, last_name, city, groupId)
values('$fname', '$lname', '$city', '$groupid')";

if($conn->query($sql) === TRUE) {
    echo "New record added";
    echo "<a href='update.php' class='top'>Home </a>";
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

?>