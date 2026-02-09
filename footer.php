<!-- Your footer content goes here -->
     <link rel="stylesheet" href="style.css">

      <footer class="footer">

      <?php
      $file = $_SERVER['SCRIPT_FILENAME'];

      echo "File Name: " . basename($file) . "<br>";
      echo "Last Modified: " . date("H:i:s d.m.y", filemtime($file)) . "<br>";
      ?>

      <br>
      <br>
      <div class="footer-features">
      <div class="feature">
        <i class="fa-solid fa-wheelchair"></i>
        <p>Restaurant is wheelchair accessible.</p>
      </div>

      <div class="feature">
        <i class="fa-solid fa-wifi"></i>
        <p>Free Wi-Fi for guests.</p>
      </div>

      <div class="feature">
        <i class="fa-solid fa-gift"></i>
        <p>Gift cards availbale.</p>
      </div>

      <div class="feature">
        <i class="fa-solid fa-child-reaching"></i>
        <p>Family friendly atmosphere.</p>
      </div>
      </div>

      <div class="footer-quote">
        <p>"Your voice helps us do better."</p>
      </div>

      <div class="footer-social">
        <a href="#"><i class="fa-brands fa-facebook-f"></i> facebook.com/elitedining</a>
        <a href="#"><i class="fa-brands fa-instagram"></i> instagram.com/elitedining</a>
      </div>

      <hr>

      <div class="footer-contact" id="contact">
        
        <p><i class="fa-solid fa-location-dot"></i> Address: Kaivokatu 7, 13100 Hämeenlinna</p>
        <p><i class="fa-solid fa-phone"></i>  Contact Number: 0455 555 555</p>
        <p><a href=""><i class="fa-solid fa-envelope"></i>  Email: elitedining@gmail.com</a></p>
      </div>

       <p>© 2026 Elite Dining | All Rights Reserved</p>
      </footer>
       
</body>

</html>
