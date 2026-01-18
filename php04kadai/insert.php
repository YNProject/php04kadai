<?php
//1. POSTデータ取得
$bookname   = $_POST['bookname'];
$author     = $_POST['author'];
$bookURL    = $_POST['bookURL'];
$bookcomment = $_POST['bookcomment'];
$imgURL     = $_POST['imgURL'];

//2. DB接続（config.php を読み込む）
// $config = require __DIR__ . '/../../config/php04kadaiconfig/php04kadaiconfig.php';

// try {
//   $pdo = new PDO(
//     "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8",
//     $config['user'],
//     $config['pass']
//   );
// } catch (PDOException $e) {
//   exit('DB_CONECT:' . $e->getMessage());
// }
session_start();
require_once('../../config/php04kadaiconfig/funcs.php');
loginCheck();

$pdo = db_conn();

//3. データ登録SQL作成 
$sql = "INSERT INTO gs_an_tablekadai4(bookname,author,bookURL,bookcomment,imgURL,indate)
        VALUES(:bookname,:author,:bookURL,:bookcomment,:imgURL,sysdate());";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':bookname', $bookname, PDO::PARAM_STR);
$stmt->bindValue(':author', $author, PDO::PARAM_STR);
$stmt->bindValue(':bookURL', $bookURL, PDO::PARAM_STR);
$stmt->bindValue(':bookcomment', $bookcomment, PDO::PARAM_STR);
$stmt->bindValue(':imgURL', $imgURL, PDO::PARAM_STR);
$status = $stmt->execute();

//4. データ登録処理後
if ($status == false) {
  $error = $stmt->errorInfo();
  exit("SQL_ERROR:" . $error[2]);
} else {
  header("Location: index.php");
  exit();
}
