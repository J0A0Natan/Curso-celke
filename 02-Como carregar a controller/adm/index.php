<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke ADM</title>
</head>
<body>
    <?php 
        require './core/ConfigController.php';
        $home = new ConfigController();
        $home->loadPage();
    ?>
</body>
</html>