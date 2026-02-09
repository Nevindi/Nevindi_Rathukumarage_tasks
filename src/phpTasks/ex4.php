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

<br>

<?php
$date = date("F");
    if($date == "August")
        {
            echo "It's August, so it's still holiday.";
        }
    else {
        echo "Not August, this is month $date so I don't have any holidays.";
    }

?>
<br>
    <div class='form-floating mb-3'>
         <div style='width: 30%;'>
        <form method="GET">
            Enter a Number: <input type='number' class='form-control' id='floatingInput' name='number' placeholder='Enter Your Number Here'><br>
            <input type='Submit'>
        </div>
    </div>
    </form>    

        <?php 

            if(isset($_GET['number']))
            {
                $n = $_GET['number'];

        echo "<h3> Multiplication Table of $n </h3>";
        for ($i = 1; $i <= 10; $i++)
            {   $result = $n * $i;
                echo "$n * $i = $result <br>";
            }

           } 
           ?>

<br>
    <div class='form-floating mb-3'>
         <div style='width: 30%;'>
        <form method="GET">
            Enter a Number: <input type='number' class='form-control' id='floatingInput' name='number2' placeholder='Enter Your Number Here'><br>
            <input type='Submit'>
        </div>
    </div>
    </form>    

        <?php 

            if(isset($_GET['number2']))
            {
                $number2 = $_GET['number2'];

        echo "<h3> Numbers from 1 to $number2 </h3>";
        $i = 1;
        while (true)
            {   
                echo  $i . "<br>";

                if ($i == $number2)
                    {
                        break;
                    }

                $i++;
                    
            }

           } 
           ?>

<br>
<?php 
    $myarray= array("HTML", "CSS", "PHP", "JavaScript");
    foreach($myarray as $op)
        {
             echo $op. "<br>";
        }

   

 ?>

 </body>
<?php include 'footer.php'; ?>

</html>
