<?php
session_start();

if(isset($_SESSION["nick"])) {
?>
    <h1>Hoşgeldiniz, <?php echo htmlspecialchars($_SESSION["nick"]); ?></h1>
    <a href="?git=signout">Çıkış Yap</a>
<?php
} else {
?>
    <h1>ANA SAYFA</h1>
    <a href="?git=login">Giriş Yap</a>
<?php
}
?>
