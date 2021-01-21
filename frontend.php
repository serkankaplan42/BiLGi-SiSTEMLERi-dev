<!doctype html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>frontend</title>
    <style>
        .form {

            padding: 70px 0;
            text-align: center;
        }

        .g-recaptcha{
           margin-left: 40%;
        }
        input {
            margin-bottom: 20px;
        }

        body {
            background-color: gray;
        }
    </style>

</head>

<body>





    <div class="form">
        <form action="backend.php" method="POST">
       
            <div>
               <label for=""> veri :</label> <input type="text" name="data" id="data">
                <div class="g-recaptcha" data-sitekey="6LffujUaAAAAAKqlJY8T78_AeZGNNvtpqLrNgdwN"></div>
            </div>
            <div>
                <input type="submit" value="Veriyi backend e gönder">
            </div>
        </form>
    </div>



</body>

</html>