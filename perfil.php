<?php
session_start();

if (!isset($_SESSION['usuari'])) {
    header("Location: s1_06_exercici1.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Perfil de l'usuari</h1>
    <p>Usuari: <?php echo htmlspecialchars($_SESSION['usuari']); ?></p>
    <p>E-mail: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
    <p><a href="s1_06_exercici1.html">Torna al formulari</a></p>
</body>
</html>