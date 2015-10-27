<html>
  <head>
  </head>
  <body>
    <p>
      <?php
        $items = 8;

        if($items > 5) {
          echo "You get a 10% discount!";
        }

        for ($leap = 2004; $leap < 2050; $leap = $leap + 4) {
                echo "<p>$leap</p>";
        }
      ?>
    </p>
  </body>
</html>