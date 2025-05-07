<?php require_once('./controller/controllerForm.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Admin</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="container">
        <h2>Connexion</h2>

        <?php if (!empty($message)) : ?>
            <div class="message <?php echo $success ? 'success' : 'error'; ?>">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="login">Identifiant :</label>
                <input type="text" name="login" id="login" required>
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" required>
                <label>
                    <input type="checkbox" name="admin" value="1">
                    Connexion admin
                </label>
            </div>

            <button type="submit">Se connecter</button>
        </form>
    </div>
</body>
</html>
