<?php
// Vérifiez si l'URL demandée est /404 et renvoyez un statut 200 si c'est le cas.
if ($_SERVER['REQUEST_URI'] == '/404') {
   header("Location: /index", true, 302);
} else {
    // Renvoyez un code d'état 404 pour toutes les autres URL
    header("HTTP/1.1 404 Not Found");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="title" content="Page non trouvée - Bytemeuh">
 <title>Page non trouvée - Bytemeuh</title>
    <meta name="description" content="Désolé, la page que vous recherchez n'existe pas. Découvrez d'autres sections de notre site.">
    <meta name="keywords" content="404, page non trouvée, erreur 404, Bytemeuh, site web">
    <meta name="author" content="Bytemeuh">
    <meta name="robots" content="noindex, nofollow"> <!-- Empêche l'indexation de cette page -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/styles/all.css">
    <title>Page non trouvée - Bytemeuh</title>
  
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Erreur 404 - Page non trouvée",
  "description": "La page que vous recherchez n'existe pas."
}
</script>

  
</head>
<body>
    <header>
        <h1>Oups ! Page non trouvée (404)</h1>
        <p>Désolé, la page que vous recherchez n'existe pas ou a été déplacée.</p>
	  <?php include 'navbar.php'; ?>
    </header>
  
    <main>
        <section>
            <h2>Que faire maintenant ?</h2>
            <p>Voici quelques suggestions pour vous aider à trouver ce que vous cherchez :</p>
        </section>
        <section>
            <h2>Recherche</h2>
            <p>Vous pouvez également utiliser la barre de recherche ci-dessous pour trouver ce que vous cherchez :</p>
            <form action="search.html" method="get">
                <input type="text" name="q" placeholder="Rechercher...">
                <button type="submit">Rechercher</button>
            </form>
        </section>
    </main>

<?php include 'footer.php'; ?>
</body>
</html>
