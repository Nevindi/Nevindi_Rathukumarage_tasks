<html>
    <body>
        <?php include 'header.php'; ?>
<div class='form-floating mb-3'>
    <div style='width: 30%;'>
        <form method="GET">
            Name: <input type='text' class='form-control' id='floatingInput' name='name' placeholder='Enter Your Name'><br>
            Age: <input type='number' class='form-control' id='floatingInput' name='age' placeholder='Enter Your Age'><br>
            <input type='Submit'>
    </div>
</div>
</form> 

<?php
if (isset($_GET['age']))
{
    $name = $_GET['name'];
    $age = $_GET['age'];

    if ($age >= 18)
        {
            echo "Hello $name, you are eligible for voting.";
        }
        else{
             echo "Hello $name, you are not eligible for voting.";
        }

}
?>
 </body>
<?php include 'footer.php'; ?>

</html>
