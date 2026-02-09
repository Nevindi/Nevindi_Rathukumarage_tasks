<html>
    <body>
        <?php include 'header.php'; ?>

        <?php

        // Task 02
        echo"<h1 class='specialH1'>Exercise 1: Getting Started with PHP - Nevindi</h1>";

        // Task 03-i
        $string1 = "David";         // String Variable
        echo"<h3 class='specialH3'>Hello world! My name is \"" . $string1 . "\" </h3>";

        // Task 03-ii
        $title = "PHP is interesting.";         
        echo"<h4 class='specialH4'> \"" . $title . "\" </h4>";

        // Task 03-iii
        $g1 = 5;
        $g2 = 4;
        $g3 = 5;

        echo "<table>
            <tr>
                <th>S.n</th>
                <th>Name</th>
                <th>Grade</th>
            <tr>
                <td>1</td>
                <td>John</td>
                <td>$g1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Alice</td>
                <td>$g2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Bob</td>
                <td>$g3</td>                
            </tr>
        </table>";

  echo "<br>";     

  // Task 03-iv
  echo "<img src='image.png'>";


?>
</body>
    
<?php include 'footer.php'; ?>

</html>