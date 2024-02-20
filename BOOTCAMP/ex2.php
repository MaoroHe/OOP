<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $article = "Ceci est un text en rapport avec les articles...";
        $annonces = "Ceci est un texte en rapport avec les annonces...";
        $offres = "Ceci est un texte en rapport avec les offres d'emploi...";

        $postuler = '- Postuler maintenant';

        function article_generator() {}

        class Article {}
    ?>

    <main>
        <h2>Article</h2>
            <p><?=$article?></p>

        <h2>Annonces</h2>
            <p><?php echo strtoupper($annonces);?></p>

        <h2>Offres d'emploi</h2>
            <p><?=$offres . ' ' . $postuler?></p>
    </main>
</body>
</html>