<?php
$countries = array("Netherlans" => "Amsterdam", "Greece" => "Athens", "Germany" => "Berlin", "Slovakia" => "Bratislava", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Ireland" => "Dublin", "Finland" => "Helsinki", "Slovenia" => "Luxembourg", "France" => "Paris");
function display($country)
{
      foreach ($country as $key => $value) {
            echo "Thủ đô của " . $key . " là " . $value . "<br><br>";
      }
}
display($countries);
