<?php include 'cabecera.php'; ?>

<form action = inicio.php class="btn">
    <label for = "user">Introdueix el teu nom d'usuari:</label><br>
    <input type = "text" id = "user" name = "user"><br>
   
    <label for = "pass">Introdueix la teva contraseña:</label><br>
    <input type = "text" id = "pass" name = "pass"><br>

    <input type="submit" value = "Submit">

</form>
<?php
    session_start();
    if (isset($_SESSION["user"])) {
        $user = $_SESSION["user"];
    } else {
        $user = $_REQUEST["user"];
        $_SESSION["user"] = $user;
    }
    
    if (isset($_SESSION["pass"])) {
        $pass = $_SESSION["pass"];
    } else {
        $pass = $_SESSION["pass"];
        $_SESSION["pass"] = $pass;
    }
    
?>
<style>
.btn {
    text-align: center;
    position: relative;
    top: 100px;
    font-size: 30px;
}
</style>
