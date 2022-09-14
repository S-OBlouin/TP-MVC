<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=à, initial-scale=1.0">
    <title>MVC</title>
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
    <ul class="navigation">
      <li><a href="/letpmvc/">Accueil</a></li>
      <li><a href="?module=user&action=create">Nouvelle Utilisateur</a></li>
      <li><a href="?module=user&action=index">Nouvelle Article</a></li>
    </ul>
    <div class="container">
        <?php echo $content; ?>
    </div>
</body>
</html>