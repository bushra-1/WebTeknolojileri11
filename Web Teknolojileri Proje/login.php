<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    $user = 'B221210084';
    $pass = '10884052200';

    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == $user && $password == $pass) {
            echo "Giriş Yapıldı";
        } else {
            echo "Lütfen geçerli bir kullanıcı adı ve şifre giriniz!";
        }
    }
    ?>

    <div class="login">
        <a name="login">
            <form method="POST" action="#hakkinda">
                <input type="text" name="username" placeholder="Kullanıcı Adı"><br><br>
                <input type="password" name="password" placeholder="Şifre"><br><br>
                <button type="submit">GİRİŞ YAP</button>
            </form>
        </a>

    </div>

</body>

</html>