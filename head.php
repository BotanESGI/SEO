<?php
$pageTitle = isset($pageTitle) ? $pageTitle : "Bytemeuh - Actualités et Conseils Automobile - Voiture";
$pageDescription = isset($pageDescription) ? $pageDescription : "Bytemeuh est spécialisé dans l'accompagnement des voitures. Découvrez nos actualités automobiles, astuces, guides pratiques, conseils d'achat, réparation, entretien et bien plus encore sur Bytemeuh.";
$currentUrl = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$isNoIndex = strpos($currentUrl, '/mentions-legales') !== false || strpos($currentUrl, '/politique-de-confidentialite') !== false;
$styles = [
    'articles' => '/assets/styles/articles.css', 
    'article' => '/assets/styles/article.css',
    'a-propos' => '/assets/styles/a-propos.css',
    'contact' => '/assets/styles/contact.css',
    'faq' => '/assets/styles/faq.css',
    'partners' => '/assets/styles/partners.css',
    'mentions-legales' => '/assets/styles/mentions-legales.css', 
    'plan-du-site' => '/assets/styles/plan-du-site.css', 
    'politique-de-confidentialite' => '/assets/styles/politique-de-confidentialite.css',
    '' => '/assets/styles/index.css',
];


$cssPath = '/assets/styles/all.css';


foreach ($styles as $key => $style) {
    if (strpos($currentUrl, $key) !== false) {
        $cssPath = $style;
        break; 
    }
}
?>
<meta charset="UTF-8">
<link rel="manifest" href="/manifest.json">
<meta name="title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="keywords" content="Bytemeuh, Byte meuh, bytemeuh, byte meuh, actualités automobiles, astuces, guides pratiques, conseils d'achat, réparation, entretien, voitures, achat de voiture, réparation automobile, entretien automobile, actualités voiture, conseils auto, voiture neuve, voiture d'occasion, conseils entretien voiture, tests automobiles, sécurité automobile, tendances automobile, voitures écologiques, comparer voitures, réparation voiture pas chère, intervention 24h, garagiste compétent, qualifié, fiable, service rapide, entretien à domicile, diagnostic voiture, pièces auto, entretien économique, assurance automobile, prêts auto, leasing voiture, conseils sécurité, achat en ligne voiture, comparateur de prix auto, aides à l'achat automobile">
<meta name="author" content="Bytemeuh">
<meta name="copyright" content="Bytemeuh" />

<?php if ($isNoIndex): ?>
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
<?php else: ?>
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="googlebot" content="index, follow">
<?php endif; ?>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<base href="//bytemeuh-bytemeuh.fr">
<link rel="canonical" href="<?php echo htmlspecialchars($currentUrl); ?>">
<link rel="stylesheet" href="<?php echo $cssPath; ?>">

<link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicon-192x192.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">

<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo htmlspecialchars($currentUrl); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta property="og:image" content="https://bytemeuh-bytemeuh.fr/assets/images/logo.webp">
<meta property="og:image:type" content="image/webp">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="Bytemeuh">
<meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="twitter:image" content="https://bytemeuh-bytemeuh.fr/assets/images/logo.webp">

<meta itemprop="name" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta itemprop="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta itemprop="image" content="https://bytemeuh-bytemeuh.fr/assets/images/logo.webp">

<meta name="publisher" content="Bytemeuh">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Bytemeuh",
  "url": "https://www.bytemeuh.com",
  "logo": {
    "@type": "ImageObject",
    "url": "https://bytemeuh-bytemeuh.fr/assets/images/logo.webp"
  },
  "sameAs": [
    "https://www.facebook.com/bytemeuh",
    "https://www.twitter.com/bytemeuh",
    "https://www.instagram.com/bytemeuh",
    "https://www.linkedin.com/company/bytemeuh",
    "https://www.youtube.com/@bytemeuh-bytemeuh"
  ]
}
</script>

<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://bytemeuh-bytemeuh.fr",
            "name": "Accueil"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://bytemeuh-bytemeuh.fr/article",
            "name": "Articles"
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https://bytemeuh-bytemeuh.fr/faq",
            "name": "FAQ"
          }
        },
        {
          "@type": "ListItem",
          "position": 4,
          "item": {
            "@id": "https://bytemeuh-bytemeuh.fr/a-propos",
            "name": "À propos"
          }
        },
        {
          "@type": "ListItem",
          "position": 5,
          "item": {
            "@id": "https://bytemeuh-bytemeuh.fr/partners",
            "name": "Nos partenaires"
          }
        },
        {
          "@type": "ListItem",
          "position": 6,
          "item": {
            "@id": "https://bytemeuh-bytemeuh.fr/contact",
            "name": "Contact"
          }
        }
      ]
    }
</script>