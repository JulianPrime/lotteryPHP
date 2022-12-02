<?php
  //資料庫設定
  //資料庫位置
  $db_server = 'localhost';
  //資料庫名稱
  $db_name = 'student';
  //資料庫管理者帳號
  $db_user = 'root';
  //資料庫管理者密碼
  $db_passwd = 'helloworld0327';

  // mysqli 的四個參數分別為：伺服器名稱、帳號、密碼、資料庫名稱
  $db = mysqli_connect($db_server, $db_user, $db_passwd, $db_name) or die ('Error with MySQL connection');
  mysqli_query($db,"SET NAMES utf8");
?>