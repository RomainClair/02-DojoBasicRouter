<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
    if(isset($title)) {
        echo $title;
    }
    else {
        echo "Undefined title";
    }
    ?></title>
</head>
<body>
    <header>
        <nav>
            <?php include __DIR__ . '/nav.php' ?>
        </nav>
    </header>
