<?php
include("functions.php");
$id=$_GET["id"];

//2. DB接続します(エラー処理追加)
$pdo = db_con();


//３．データ登録SQL作成
$stmt = $pdo->prepare("SELECT *FROM blog_table WHERE id = :id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  err_db_Info($stmt);
}else{
    $row = $stmt->fetch();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <title>Document</title>
</head>
<style>
    html,body{
        width: 100vw;
        height: 100vh;
        scroll-behavior: smooth;
        margin:0;
        color:#fff;
        font-family: -webkit-pictograph;
    }
    a{
        text-decoration: none;
        color: #fff;
    }
    .P{
        width: 100vw;
        height: 100vh;
        font-family: -webkit-pictograph;
        scroll-behavior: smooth;
        margin:0;
        color:#fff;
        display: flex;
        flex-direction: column;
    }
    #form{
        width: 80vw;
        height: 85vh;
        margin:auto;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        margin-bottom:2vh;
    }
    #form li{
        font-size: 4vh;
        color: #ddc8ba;
    }
    #form ::placeholder{
        color:#d8d1ce;
        font-size: 3vh;
    }
    #title{
        width: 60vw;
        height: 1vh;
        margin:auto;
        display: flex;
        align-items: center;
        justify-content: center;
        /* border: 1px solid #e7d4cb; */
        font-size: 4vh;
        color: #ddc8ba;
        font-weight: bold;
    }
    #content{
        width: 60vw;
        height: 50vh;
        margin:auto;
        display: flex;
        /* justify-content: center; */
        /* border: 1px solid #e7d4cb; */
        padding: 2vw;
        font-size: 3vh;
        resize: none;
        color: #ddc8ba;
        overflow:auto;
        wrap:soft;
    }
    #send{
        width: 20vw;
        height: 7vh;
        margin:auto;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #ddc8ba;
        font-size: 3vh;
        background: none;
        color: #ddc8ba;
        transition: all 1s ease;
    }
    #send:hover{
        border-radius: 10em;
        color: #fff;
        background: #ddc8ba;
    }
    #P2 img{
        width: 100%;
    }
    #delete_check{
        width: 100vw;
        height: 100vh;
        margin:0;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        color: #ddc8ba;
        position:absolute;
        z-index:5;
        top:0;
        background:#fff;
    }
    #select{
        width: 100vw;
        margin:0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ddc8ba;
        z-index:5;
        top:0;
        background:#fff;
    }
    #d_text{
        width: 100vw;
        margin-bottom:3vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        color: #ddc8ba;
        z-index:5;
        top:0;
        background:#fff;
    }
    #delete{
        width: 20vw;
        height: 7vh;
        margin:auto;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #ddc8ba;
        font-size: 3vh;
        background: none;
        color: #ddc8ba;
        transition: all 1s ease;
    }
    #delete:hover{
        border-radius: 10em;
        color: #fff;
        background: #ddc8ba;
    }
    #btn{
        width: 20vw;
        height: 7vh;
        margin:auto;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #ddc8ba;
        font-size: 3vh;
        background: none;
        color: #ddc8ba;
        transition: all 1s ease;
        margin-right:2vw;
        margin-left:2vw;
    }
    #btn:hover{
        border-radius: 10em;
        color: #fff;
        background: #ddc8ba;
    }
    #edit_btn{
        width: 20vw;
        height: 7vh;
        margin:auto;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #c1c1c1;
        font-size: 3vh;
        background: none;
        color: #c1c1c1;
        transition: all 1s ease;
        margin-right:2vw;
        margin-left:2vw;
    }
    #edit_btn:hover{
        border-radius: 10em;
        color: #fff;
        background: #c1c1c1;
    }
    #select{
        width: 100vw;
        margin:0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ddc8ba;
        z-index:5;
        height: 15vh;
        background:#fff;
    }
</style>
<body>
<div class="P" id="P1">
        <div id="title"><?=$row["title"]?></div>
        <pre id="content"><?=$row["content"]?></pre>
        <div id="select">
            <form action="top.php?" method="post">
                <input type="submit" value="top" id="btn">
            </form>
            <form action="content.php?id=<?=$row["id"]+1?>" method="post">
                    <input type="submit" value="next" id="btn">
            </form>
            <form action="edit.php?id=<?=$row["id"]?>" method="post">
                    <input type="submit" value="edit" id="edit_btn">
            </form>
        </div>
        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="js/jquery.bgswitcher.js"></script>
<script src="js/background-check.min.js"></script>

<script>
$(function(){
    $("#delete").click(function(){
        $("#delete_check").show();
    });
});

</script>
</body>