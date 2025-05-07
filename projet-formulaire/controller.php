
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'] ;
    $password = $_POST['password'] ;
    $admin = isset($_POST['admin']) ? 1 : 0;
    
    echo "<p class='phpI'>Login  :  ✔".$login . "</p>";
    echo "<p class='phpI'>Mot de passe: ✔" . $password . " (pour info)</p>";
    echo "<p class='phpI'>Admin :  ✔". ($admin ? 1 : 0) . "</p>";
    echo "<p class='phpI'><a href='index.php'>Retour</a></p>";
} else {
    
    echo "<p class='phpI'>Veuillez soumettre le formulaire.</p>";
}
?>
