<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet" />
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
        color: #ddc8ba;
    }
    .P{
        width: 100vw;
        height: 100vh;
        font-family: -webkit-pictograph;
        scroll-behavior: smooth;
        margin:0;
        color:#ddc8ba;
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
        padding-bottom: 2vh;
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
    a{
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
        margin:3vh;
        font-family: -webkit-pictograph;
    }
    a:hover{
        border-radius: 10em;
        color: #fff;
        background: #ddc8ba;
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
</style>
<body>
<div class="P" id="P1">
    <div id="delete_check" style="font-family:Sawarabi Mincho;">
        更新しました
        <a href="top.php"><div id="back">back to TOP</div></a>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="js/jquery.bgswitcher.js"></script>
<script src="js/background-check.min.js"></script>

<script>

</script>
</body>