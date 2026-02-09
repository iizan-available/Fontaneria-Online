<?php include 'cabecera.php'; ?>

<form action = login.php class="btn">
    <label for = "user">Introdueix el teu nom d'usuari:</label><br>
    <input type = "text" id = "user" name = "user"><br>
   
    <label for = "pass">Introdueix la teva contraseña:</label><br>
    <input type = "text" id = "pass" name = "pass"><br>

    <input type="submit" value = "Submit">

</form>

<style>
.btn {
    text-align: center;
    position: relative;
    top: 100px;
    font-size: 30px;
}
</style>