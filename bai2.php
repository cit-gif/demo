<style>
      select {
            width: 200px;
      }

      div {
            padding: 10px;
            border: 1px solid rgb(30 144 255);
            width: max-content;
      }
</style>
<?php
// include "./bai1.php";
$monHoc = array("1" => "Java", "2" => "HTML", "3" => "PHP", "4" => "C#");
$dsLop = array("1" => "PHP 1", "2" => "PHP 2", "3" => "PHP 3");

function display($n)
{

      echo "<select>";
      foreach ($n as $key => $value) {
            # code...
            echo "<option>$value</option>";
      }
      echo "</select>";
}
echo "<div>";
echo 'Môn học : ';
display($monHoc);
echo "<br />";
echo 'Môn học : ';
display($dsLop);
echo "</div>";
