<style>
      select {
            width: 200px;
      }
</style>
<?php
$monhoc = array('1' => 'Java', '2' => 'HTML', '3' => 'PHP', '4' => 'C#');

echo '<select>';
foreach ($monhoc as $key => $value) {
      # code...
      echo "<option>$value</option>";
}
echo '</select>';
