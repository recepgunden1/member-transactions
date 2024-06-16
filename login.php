<h1>GİRİŞ YAP</h1>
<hr>

<?php
session_start();

if ($_POST) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (!$username || !$password) {
        echo '<span style="color:red;">Kullanıcı adı ve şifrenizi eksiksiz giriniz !!!</span>';
    } else {
        $password = md5($password);
        $login = $db->prepare("SELECT * FROM user WHERE user_nick = :username AND user_password = :password");
        $login->execute(array(':username' => $username, ':password' => $password));
        $l = $login->fetch(PDO::FETCH_ASSOC);

        if ($l) {
            echo '<span style="color:blue;">Giriş Başarılı</span>';
            $_SESSION["name"] = $l["user_name"];
            $_SESSION["nick"] = $l["user_nick"];

            header("Location: /uye-islemleri/");
            exit();
        } else {
            echo '<span style="color:red;">Kullanıcı adı veya şifrenizi hatalı girdiniz !!!</span>';
        }
    }
}
?>

<form action="" method="POST">
    <label for="usernamek">Kullanıcı Adı:</label><br>
    <input type="text" id="usernamek" name="username" placeholder="Kullanıcı Adı"><br>
    <label for="passwordk">Şifre:</label><br>
    <input type="password" id="passwordk" name="password" placeholder="Şifrenizi Giriniz"><br>
    <br>
    <input type="submit" value="Giriş Yap">
</form>
