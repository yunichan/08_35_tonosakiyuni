<?php
include("functions.php");

//POSTデータ取得
// $title   = $_POST["title"];
// $content = $_POST["content"];

//DB接続します
$pdo = db_con();

//データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM blog_table");
$status = $stmt->execute();

//データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
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
    #nav_ul{
        display: flex;
        width: 98vw;
        position: absolute;
        height: 8vh;
        align-items: center;
        justify-content: flex-end;
        padding: 1vw;
        position: fixed;
    }
    .nav_text{
        width: 9vw;
        height: 5vh;
        display:flex;
        align-items:center;
        justify-content:center;
        font-size: 3vh;
        position: relative;
    }
    .nav_text::after{
        position: absolute;
        bottom: -4px;
        left: 0;
        content: '';
        width: 100%;
        height: 1px;
        transform-origin: left top;
        background: #fff;
        transform: scale(0,1);
        transition: transform 0.3s;
    }
    .nav_text:hover::after{
        transform: scale(1,1);
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
    }
    #P0_text{
        width: 100vw;
        height: 100vh;
        color: #fff;
        display:flex;
        align-items:center;
        justify-content:center;
        font-size:5vh;
        font-family: -webkit-pictograph;
    }
    #P0{
        width: 100vw;
        height: 100vh;
        margin:0;
        background-position:center center;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #P1{
        width: 100vw;
        height: 100vh;
        margin:0;
        background:none;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #form{
        width: 80vw;
        height: 100vh;
        margin:auto;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #form li{
        font-size: 4vh;
        color: #ddc8ba;
        margin-bottom:2vh;
    }
    #form ::placeholder{
        color:#d8d1ce;
        font-size: 3vh;
    }
    #edit{
        color:#d8d1ce;
        border:1px solid #d8d1ce;
    }
    #title{
        width: 60vw;
        height: 1vh;
        margin:auto;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #e7d4cb;
        padding: 2vw;
        font-size: 3vh;
        color: #ddc8ba;
    }
    #content{
        width: 60vw;
        height: 50vh;
        margin:auto;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #e7d4cb;
        padding: 2vw;
        font-size: 3vh;
        resize: none;
        color: #ddc8ba;
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
    #P2{
        width: 100vw;
        height: 100vh;
        margin:0;
        background-position:center center;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        color: #ddc8ba;
    }
    #P2_text{
        margin-bottom: 5vh;
        font-size: 3vh;
    }
    #P2 ul{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    #P2 li{
        width: 30vw;
        height: 35vh;
        margin: 1vw;
    }
    #P2 img{
        width: 100%;
        transition: all .5s ease;
    }
    img:hover{
        opacity: 0.5;
    }
    #P2 li{
        margin-bottom:5vh;
    }
    #P3{
        background:#ddc8ba;
    }
    #tt{
        width: 100vw;
        height: 10vh;
        margin:0;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        color: #ddc8ba;
        background:#fff;
    }
</style>
<body>
    <div id="nav">
        <ul id="nav_ul">
            <li class="nav_li"><a href="#"><div class="nav_text">top</div></a></li>
            <li class="nav_li"><a href="login.php"><div class="nav_text">post</div></a></li>
            <li class="nav_li"><a href="#P2"><div class="nav_text">blog</div></a></li>
        </ul>
    </div>
    <div class="P" id="P0">
        <div id="P0_text">Thank you for visiting my website.</div>
    </div>
    <div class="P" id="P1" style="display:none;">
        <form action="insert.php" method="post" id=form>
            <ul>
                <li><div class="input_li">title</div><input type="text" name="title" id="title" placeholder="Hi"></li>
                <li><div class="input_li">content</div><textarea type="text" name="content" id="content" placeholder="Hello"></textarea></li>
                <li><input type="submit" value="post" id="send"></li>
            </ul>
        </form>
    </div>
    <div class="P" id="P2">
        <div id="P2_text">Blog</div>
        <ul>
            <?php while($result = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
            <li>
                <div class="P2_title">
                    <?php echo $result['title'];?>
                </div>
                <div id="day">
                    <?php echo $result['date'];?>
                </div>
                <a href="content.php?id=<?=$result['id']?>">
                    <img src="img5.jpg" alt="">
                </a>
            </li>
            <?php }?>
        </ul>
    </div>
    <!-- <div class="P" id="P3"></div> -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="js/jquery.bgswitcher.js"></script>
<script src="js/background-check.min.js"></script>
<!-- <script src="js/particles.min.js"></script>
<script src="js/particles_setting.js"></script> -->

<script>

BackgroundCheck.init({
    targets: '#nav'
});

// jQuery(function($) {
$(function(){
    $('#P0').bgSwitcher({
        images: ['img5.jpg','img7.jpg','img4.jpg','img2.jpg','img6.jpg'], // 切替背景画像を指定
        interval: 4000, // 背景画像を切り替える間隔を指定
        loop: true, // 切り替えを繰り返すか指定 true=繰り返す　false=繰り返さない
        shuffle: true, // 背景画像の順番をシャッフルするか指定 true=する　false=しない
        effect: "fade", // エフェクトの種類をfade,blind,clip,slide,drop,hideから指定
        duration: 2000, // エフェクトの時間を指定します。
        easing: "swing" // エフェクトのイージングをlinear,swingから指定
    });
});


</script>
</body>
</html>


<?php 
}
?>