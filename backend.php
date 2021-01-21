<!doctype html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>backend</title>
    <style>
        .block {
            padding: 70px 0;
            text-align: center;
        }

        body {
            font-size: 24px;
            background-color: gray;
        }
    </style>

</head>

<body>
    <div class="block">
        <?php
        if (isset($_POST["data"])) {
            echo  "Gelen verinin türü : ".gettype($_POST["data"]);?><br><?php
            echo "Gelen veride XSS açıgı koruması : ".htmlspecialchars($_POST["data"]);?><br><?php
            echo "Gelen veriyi şifreleme : ".md5($_POST["data"]);?><br><?php
            setcookie("veri",$_POST["data"],null,'/',null,null,true);
        } else {
            echo "veri null geldi";
        }

      

        ?>
    </div>
</body>

</html>