<?php
include("functions.php");
$id=$_GET["id"];

//入力チェック(受信確認処理追加)
if(
  !isset($_POST["title"]) || $_POST["title"]=="" ||
  !isset($_POST["content"]) || $_POST["content"]==""
){
  exit('ParamError');
}


//POSTデータ取得
$title   = $_POST["title"];
$content = $_POST["content"];

//2. DB接続します(エラー処理追加)
$pdo = db_con();


//３．データ登録SQL作成
$stmt = $pdo->prepare("UPDATE blog_table SET title = :title, content=:content WHERE id = :id");
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  err_db_Info($stmt);
}else{
  //５．index.phpへリダイレクト
  header("Location: up_ok.php");
  exit;
}
?>