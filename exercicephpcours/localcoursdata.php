<?php
if (isset($_GET["l"])) {

foreach ($_GET["l"] as $key) {
 echo "<p>", $key, "</p> <br>";
    }

if (isset($_GET["o"])) {
      foreach ($_GET["o"] as $val) {
 echo "<p>", $val, "</p> <br>";
        }
    }

    if (isset($_GET["t"])) {

foreach ($_GET["t"] as $vals) {
echo "<p>", $vals, "</p> <br>";
        }
    }
  
}
?>
