<?php
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM studentsinfo WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
First Name: <br>
<input type="text" name="first_name"  value="<?php echo $row['first_name']; ?>">
<br>
Last Name :<br>
<input type="text" name="last_name" value="<?php echo $row['last_name']; ?>">
<br>
City:<br>
<input type="text" name="city" value="<?php echo $row['city']; ?>">
<br>
Email:<br>
<input type="text" name="groupId" value="<?php echo $row['groupId']; ?>">
<br>

<input type="submit" name="submit" value="Delete" >
</form>
<?php 
if($_POST['submit']){
    
    $fname = $_POST['first_name'];
    $query = mysqli_query($conn,"DELETE FROM studentsinfo where id='$a'");
    if($query){
        echo "Record Deleted with id: $a <br>";
        echo "<a href='update.php'> Check your updated List </a>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "Record Not Deleted";}
    }
$conn->close();
?>
</body>
</html>