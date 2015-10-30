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

        $famFriends = array();
        	// Create an array and push on the names
        	array_push($famFriends, "Josh");
        	array_push($famFriends, "Matt");
        	array_push($famFriends, "Luke");
        	array_push($famFriends, "Matt");
        	array_push($famFriends, "Bob");
        	array_push($famFriends, "Mikel");
        	array_push($famFriends, "Jim");
            // of your closest family and friends
            sort($famFriends);
        	// Sort the list
            print strtoupper($famFriends[rand(0, (count($famFriends) - 1))]);

      ?>
    </p>
  </body>
</html>