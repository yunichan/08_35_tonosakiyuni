
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
    }
    #form{
        width: 80vw;
        height: 95vh;
        margin:auto;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        margin-bottom:2vh;
    }
    #form li{
        font-size: 4vh;
        color: #ddc8ba;
        margin-bottom: 2vh;
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
</style>
<body>
<div class="P" id="P1">
<form action="insert.php" method="post" id=form>
    <ul>
        <li><div class="input_li">title</div><input type="text" name="title" id="title" placeholder="Hi"></li>
        <li><div class="input_li">content</div><textarea type="text" name="content" id="content" placeholder="Hello"></textarea></li>
        <li><input type="submit" value="post" id="send"></li>
    </ul>
</form>
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