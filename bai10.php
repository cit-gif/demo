<style>
      table {
            border: 1px solid #ddd;
            width: 100%;
      }

      th {
            background-color: rgb(94 156 218);
      }

      th,
      td {
            text-align: center;
            border: 1px solid #ddd;
            padding: 4px;
      }

      tr:nth-child(even) {
            background-color: #f2f2f2;
      }
</style>
<?php
$arrSinh_vien = array(
      "181C900001" => array(
            "Ten_SV" => "Nguyễn Văn Bảo",
            "DiemTB" => "95",
            "CapChungNhan" => "1"
      ),
      "181C900002" => array(
            "Ten_SV" => "Huỳnh Thị Thanh Thủy",
            "DiemTB" => "85",
            "CapChungNhan" => "0"
      ),
      "181C900003" => array(
            "Ten_SV" => "Ngô Việt Anh",
            "DiemTB" => "98",
            "CapChungNhan" => "1"
      ),
      "181C900004" => array(
            "Ten_SV" => "Nguyễn Thị Hương Lan",
            "DiemTB" => "100",
            "CapChungNhan" => "1"
      ),
      "181C900005" => array(
            "Ten_SV" => "Nguyễn Thành",
            "DiemTB" => "99",
            "CapChungNhan" => "0"
      ),
      "181C900006" => array(
            "Ten_SV" => "Nguyễn Van A",
            "DiemTB" => "100",
            "CapChungNhan" => "1"
      )
);
echo "Câu a <br><br>";
echo "<pre>";
print_r($arrSinh_vien);
echo "</pre>";

function display_a()
{
      global $arrSinh_vien;
      echo "<table>";
      echo "<tabbody>";
      echo "<tr>";
      echo "<th>ID_SV</th>";
      echo "<th>Ten_SV</th>";
      echo "<th>Diem_TB</th>";
      echo "<th>CapChungNhan</th>";
      echo "</tr>";
      foreach ($arrSinh_vien as $key => $value) {
            # code...


            if ($arrSinh_vien[$key]["CapChungNhan"] == 1) {
                  echo "<tr>";
                  echo "<td>$key</td>";
                  foreach ($value as $key1 => $value1) {
                        echo                               "<td>$value1</td>";
                  }
                  echo "</tr>";
            }
      }
      echo "</tabbody>";
      echo "</table>";
}
echo "<br><br>Câu b <br><br>";

display_a();
echo "<br><br>Câu c <br><br>";
function delete_()
{
      global $arrSinh_vien;
      foreach ($arrSinh_vien as $key => $value) {
            # code...


            if ($arrSinh_vien[$key]["CapChungNhan"] == 0) {
                  unset($arrSinh_vien[$key]);
            }
      }
      echo "<pre>";
      print_r($arrSinh_vien);
      echo "</pre>";
}
delete_();

echo "<br><br>Câu d <br><br>";
function min_arr()
{
      // lần thứ tạo mảng điểm trung bình
      global $arrSinh_vien;
      $diemArr = array();
      foreach ($arrSinh_vien as $key => $value) {
            # code...

            array_push($diemArr, $arrSinh_vien[$key]["DiemTB"]);


            // if ($arrSinh_vien[$key]["CapChungNhan"] == 0) {
            //       unset($arrSinh_vien[$key]);
            // }
      }
      // in ra điểm cao nhất
      echo "Sinh viên có điểm Trung bình cao nhất là <br>";
      foreach ($arrSinh_vien as $key => $value) {
            # code...
            if (max($diemArr) == $arrSinh_vien[$key]["DiemTB"]) {
                  // echo max($diemArr);
                  // echo "<pre>";
                  // print_r($diemArr);
                  // echo "</pre>";

                  echo "[" . $key . "]" . "<strong>" . " " . $arrSinh_vien[$key]["Ten_SV"] . "</strong>" . " Diem " . $arrSinh_vien[$key]["DiemTB"] . "<br />";
                  // break;
                  //có lệnh break thì nó sẽ in ra người đầu tiên có điểm cao nhất <=> không thì nó sẽ in ra tất cả người có điểm cao nhất
            }
      }
}
min_arr();
