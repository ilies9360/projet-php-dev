<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';
    $admin = isset($_POST['admin']) ? 1 : 0;

    if ($login === 'admin' && $password === '1234') {
        echo "<p>✔Connexion réussie.</p>";
        echo "<p>Admin = " . $admin . "</p>";
    } else {
        echo "<p style='color:red;'>Identifiants incorrects.</p>";
    }
}
?>
