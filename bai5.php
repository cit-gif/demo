<?php
$i = 1;
function display()
{
      if (isset($_POST['index']) && is_numeric($_POST['index'])) {

            global $i;
            $index = $_POST['index'];
            echo "Nhập số lượng phần tử của mảng :" . "<input type=\"text\" name=\"index\" value=\"$index\"></input>";
            echo "<button type=\"submit\">tạo</button>" . "<br><br>";
            for ($i = 1; $i <= $index;) {
                  $phantu =
                        isset($_POST["phantu" . $i]) ? $_POST["phantu" . $i] : "";
                  echo "Nhập phần tử thứ $i : " . "<input type=\"text\" name=\"phantu$i\" value=\"" . $phantu . "\">" . "<br>" . "<br>";

                  $i++;
            }
            echo '<input type="submit" name="create" value="Tính"/>';
      } else {
            echo "Nhập số lượng phần tử của mảng :" . "<input type=\"text\" name=\"index\"></>";
            echo "<button type=\"submit\">tạo</button>" . "<br>";
      }
}
function getIndex($ii)
{
      $count = 0;
      for ($i = 1; $i < $ii; $i++) {
            # code...
            if (isset($_POST["phantu" . $i]) && is_numeric($_POST["phantu" . $i])) {
                  $count = $count;
            } else {
                  $count++;
            }
      }
      return ($count == 0) && isset($_POST["create"]) ? true : false;
}
function creIndex()
{
      if (getIndex($GLOBALS['i'])) {
            $num = array();
            for ($i = 1; $i < $GLOBALS['i']; $i++) {
                  array_push($num, $_POST["phantu" . $i]);
            }
            $trung_binh_cong = array_sum(($num)) / count($num);
            sort($num);
            echo "<pre>";
            echo "Mảng đã nhập vào là : ";
            print_r($num);
            echo "</pre>";
            echo "<br><br>Trung bình cộng của mảng trên là : " . $trung_binh_cong;
            echo "<br><br>" . "Ba phần tử bé nhất là : " . $num[0] . ' , ' . $num[1] . ' , ' . $num[2];
            rsort($num);
            echo "<br><br>" . "Ba phần tử lớn nhất là : " . $num[0] . ' , ' . $num[1] . ' , ' . $num[2];
      } else {
            echo "";
      }
}

?>
<form method="post" action='./bai5.php'>
      <?php
      display();
      creIndex();
      ?>

</form>