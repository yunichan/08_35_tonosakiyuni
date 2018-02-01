
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
    #P1{
        width: 100vw;
        height: 100vh;
        margin:0;
        background:none;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .input_li{
        font-size:2vw;
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
        color: #9c806d;
        margin-bottom:2vh;
    }
    #form ::placeholder{
        color:#d8d1ce;
        font-size: 3vh;
    }
    #id, #pw {
        border:none;
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
        border: 1px solid #9c806d;
        font-size: 3vh;
        background: none;
        color: #9c806d;
        transition: all 1s ease;
    }
    #send:hover{
        border-radius: 10em;
        color: #fff;
        background: #9c806d;
    }

    #P2 li{
        margin-bottom:5vh;
    }
    #P3{
        background:#ddc8ba;
        position:absolute;
        z-index:-1;
        top:0;
    }
    #back{
        width: 4vw;
        height: 4vw;
        border: 1px solid #fff;
        border-radius:10em;
        position: absolute;
        z-index: 1;
        top: 10px;
        left: 10px;
        display: inline-flex;
        justify-content: center;
        text-align: center;
        align-items: center;
        transition: 0.5s;
    }
    #back:hover{
        background:#9c806d;
        border: 1px solid #9c806d;
        color:#fff;
    }
</style>
<body>
    <div class="P" id="P1">
        <a href="top.php">
            <div id="back"><</div>
        </a>
        <form action="post.php" method="post" id=form>
            <ul>
                <li><div class="input_li">user ID</div><input type="id" name="id" id="id" placeholder="user name"></li>
                <li><div class="input_li">password</div><input type="id" name="pw" id="pw" placeholder="user pw"></li>
                <li><input type="submit" value="login" id="send"></li>
            </ul>
        </form>
    </div>
    <div class="P" id="P3"></div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="js/jquery.bgswitcher.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/particles_setting.js"></script>

<script>



</script>
</body>
</html>
