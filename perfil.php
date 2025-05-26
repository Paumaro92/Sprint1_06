<?php
session_start();

if (!isset($_SESSION['usuari']) || !isset($_SESSION['email'])) {
    header("Location: s1_06_exercici1.html");
    exit();
}

class Usuari {
    public $nom;
    public $email;

    public function __construct($nom, $email) {
        $this->nom = $nom;
        $this->email = $email;
    }

    public function __toString() {
        return "<p>Usuari: " . htmlspecialchars($this->nom) . "</p>" .
               "<p>E-mail: " . htmlspecialchars($this->email) . "</p>";
    }

 
}

$usuari = new Usuari($_SESSION['usuari'], $_SESSION['email']);
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Perfil de l'usuari</h1>
    <?php
        echo $usuari;
    ?>
    <p><a href="s1_06_exercici1.html">Torna al formulari</a></p>
</body>
</html>