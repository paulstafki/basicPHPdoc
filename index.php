<html>
  <head>
  </head>
  <body>
    <p>
      <?php
        $items = 8;     // declaring a variable, array, object, etc

        if($items > 5) {
          echo "You get a 10% discount!";       //basic conditional echo is like console.log, print puts it on the DOM
        }

        for ($leap = 2004; $leap < 2050; $leap = $leap + 4) {       //for loop
                echo "<p>$leap</p>";
        }
        print substr("Paul", (rand(0, strlen("Paul")-1)), 1);       //combination of string functions



      ?>
    </p>
  </body>
</html>