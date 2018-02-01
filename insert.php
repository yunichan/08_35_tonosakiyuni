<?php
include("functions.php");

//入力チェック(受信確認処理追加)
if(
  !isset($_POST["title"]) || $_POST["title"]=="" ||
  !isset($_POST["content"]) || $_POST["content"]==""
){
  exit('ParamError');
}

//1. POSTデータ取得
$title   = $_POST["title"];
$content = $_POST["content"];

//2. DB接続します(エラー処理追加)
$pdo = db_con();


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO blog_table(id, title, content, date)VALUES(NULL, :title, :content, sysdate())");
$stmt->bindValue(':title', $title);
$stmt->bindValue(':content', $content);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  err_db_Info($stmt);
}else{
  //５．index.phpへリダイレクト
  header("Location: post_ok.php");
  exit;
}
?>
