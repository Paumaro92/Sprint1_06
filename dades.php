<?php

session_start();


$_SESSION['usuari'] = $_POST['usuari'];
$_SESSION['email'] = $_POST['email'];

echo "<h1>Dades del formulari:</h1>";
echo "<ul>";
echo "<li>Usuari: " . htmlspecialchars($_POST['usuari']) . "</li>";
echo "<li>email: " . htmlspecialchars($_POST['email']) . "</li>";

echo '<p><a href="perfil.php">Veure perfil amb variables de sessió</a></p>';
?>