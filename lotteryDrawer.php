<?php
require("connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- icon-->
<link rel="icon" type="icon" href="images/Emblem_of_Taoyuan_City.png" />
<title>抽獎者名單</title>
</head>
<body>
<h1>抽獎者名單</h1>
<?php
// 選取資料庫
if (!mysqli_select_db($db, $db_name)) {
    die("選取資料庫失敗！");
} else {
    echo "連接 " . $db_name . " 資料庫成功！<br>";
}

// 取得資料
$sql = "SELECT * FROM elementary_student";
$result = mysqli_query($db, $sql);

// 獲得資料筆數
if ($result) {
    $num = mysqli_num_rows($result);
    echo "elementary school 資料表有 " . $num . " 筆資料:<br>";
}

// --- 顯示資料 --- //

echo "<br>顯示資料:<br>";

$result = mysqli_query($db, $sql);
while ($row = mysqli_fetch_array($result)) {
    printf("第 %s 筆資料 : %s %s %s<br>", $row[0], $row[1], $row[2], $row[3]);
}

// 釋放記憶體
mysqli_free_result($result);

// 關閉連線
mysqli_close($db);

?>
<a href="main.php">Home</a>
</body>
</html>
