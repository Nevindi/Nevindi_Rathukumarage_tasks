<html>
    <body>

        <?php include 'header.php'; ?>

    <div class='form-floating mb-3'>
         <div style='width: 30%;'>
        <form method="GET">
            First Name: <input type='text' class='form-control' id='floatingInput' name='fname' placeholder='Enter Your First Name'><br>
            Last Name: <input type='text' class='form-control' id='floatingInput' name='lname' placeholder='Enter Your Last Name'><br>
            <input type='Submit'>
        </div>
    </div>
    </form>    

        <?php 

            if(isset($_GET['fname']) && isset($_GET['lname']))
            {
                $fname = $_GET['fname'];
                $lname = $_GET['lname'];
        
        
        echo "<h3> Hello $fname $lname, You are welcome to my site. </h3>";

           } 
           ?>

    <div style='width: 20%;'>
       <?php
       
        $g1 = 5;
        $g2 = 4;
        $g3 = 5;

        echo "<table class='table table-bordered'>
        <thead>
                    <tr class='danger'>
                        <th>S.n</th>
                        <th>Name</th>
                        <th>Grade</th>
        </thead>
        <tbody>
                    <tr class='info'>
                        <td>1</td>
                        <td>John</td>
                        <td>$g1</td>
                    </tr>
                    <tr class='secondary'>
                        <td>2</td>
                        <td>Alice</td>
                        <td>$g2</td>
                    </tr>
                    <tr class='success'>
                        <td>3</td>
                        <td>Bob</td>
                        <td>$g3</td>                
                    </tr>
                    </tbody>
                </table>";
        ?>
    </div>


<!-- String variables & length of the string-->
<?php    
$str1 ="Hello";
$str2 ="World";
 echo"  $str1  $str2   ";
  ?>
  <br>
 <?php  
 echo "Full length is: " . strlen($str1 . $str2);
 ?>
<br>
<!--Number Addition-->
 <?php    
$num1 =298;
$num2 =234;
$num3 =46;
echo "Addition is: " .$num1 + $num2 + $num3;
 ?>

<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>

</body>
<?php include 'footer.php'; ?>

</html>