<?php
$colors = array("white", "green", "red", "blue", "black");
function display($c)
{
      echo "<ul>";
      foreach ($c as  $value) {
            echo ("<li>$value</li>");
      }
      echo "</ul>";
}


display($colors);
