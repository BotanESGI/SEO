<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
        $pageTitle = "Bytemeuh - Mentions Légales";
        $pageDescription = "Consultez les mentions légales de Bytemeuh pour en savoir plus sur nos engagements, nos droits et nos responsabilités.";
        include 'head.php';
    ?>
  
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Mentions légales",
  "description": "Découvrez nos mentions légales, y compris les informations de contact et les détails légaux de notre entreprise."
}
</script>

  
</head>
<body itemscope itemtype="http://schema.org/WebSite">
<header>
    <h1><strong itemprop="headline">Bytemeuh</strong> - Mentions Légales</h1>
    <h2 itemprop="description">Informations légales concernant notre site et notre entreprise</h2>
    <?php include 'navbar.php'; ?>
</header>

<main>
    <section itemscope itemprop="about" itemtype="http://schema.org/Article">
        <h2 itemprop="headline">Présentation du site</h2>
        <p itemprop="text">Le site <strong>Bytemeuh</strong> est un site dédié aux actualités et conseils automobiles. Son objectif est de fournir des informations utiles aux passionnés de voitures.</p>
    </section>

    <section itemscope itemprop="about" itemtype="http://schema.org/Organization">
        <h2 itemprop="headline">Identité de l'éditeur</h2>
        <p><strong itemprop="name">Bytemeuh</strong> est édité par :</p>
        <ul>
            <li itemprop="name">Nom de l'entreprise : Bytemeuh</li>
            <li itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                Adresse : <span itemprop="streetAddress">242 Rue du Faubourg Saint-Antoine</span>, <span itemprop="postalCode">75012</span> <span itemprop="addressLocality">Paris</span>
            </li>
            <li itemprop="siret">SIRET : 123 456 789 00012</li>
            <li itemprop="publisher" itemscope itemtype="http://schema.org/Person">
                Responsable de la publication : <span itemprop="name">bytemeuh bytemeuh</span>
            </li>
            <li>Contact : <a href="mailto:contact@bytemeuh-bytemeuh.fr" itemprop="email">contact@bytemeuh-bytemeuh.fr</a></li>
        </ul>
    </section>

    <section itemscope itemprop="about" itemtype="http://schema.org/Organization">
        <h2 itemprop="headline">Hébergement</h2>
        <p>Ce site est hébergé par :</p>
        <ul>
            <li itemprop="name">Nom de l'hébergeur : Infomaniak</li>
            <li itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                Adresse : <span itemprop="streetAddress">Rue Eugène-Marziano 25</span>, <span itemprop="addressLocality">1227 Genève</span>, <span itemprop="addressCountry">Suisse</span>
            </li>
            <li itemprop="telephone">Téléphone : <span itemprop="telephone">+41 22 820 35 40</span></li>
        </ul>
    </section>

    <section itemscope itemprop="about" itemtype="http://schema.org/CreativeWork">
        <h2 itemprop="headline">Droits d'auteur et propriété intellectuelle</h2>
        <p itemprop="text">Les contenus du site <strong>Bytemeuh</strong>, y compris les textes, images, graphismes, logos, vidéos et autres éléments sont la propriété de Bytemeuh ou de leurs auteurs respectifs. Toute reproduction, même partielle, est interdite sans autorisation préalable.</p>
    </section>

    <section itemscope itemprop="about" itemtype="http://schema.org/CreativeWork">
        <h2 itemprop="headline">Limitation de responsabilité</h2>
        <p itemprop="text">Bytemeuh s'efforce de fournir des informations précises et à jour. Cependant, nous ne pouvons garantir l'exactitude, la fiabilité ou l'exhaustivité des informations fournies. L'utilisateur est seul responsable de l'utilisation des informations disponibles sur ce site.</p>
    </section>

    <section itemscope itemprop="about" itemtype="http://schema.org/CreativeWork">
        <h2 itemprop="headline">Liens externes</h2>
        <p itemprop="text">Le site peut contenir des liens vers des sites externes. Nous ne sommes pas responsables du contenu de ces sites et de l'usage qui en est fait.</p>
    </section>

    <section itemscope itemprop="about" itemtype="http://schema.org/CreativeWork">
        <h2 itemprop="headline">Modification des mentions légales</h2>
        <p itemprop="text">Nous nous réservons le droit de modifier ces mentions légales à tout moment. Les utilisateurs sont invités à consulter régulièrement cette page pour rester informés.</p>
    </section>
</main>
<?php include 'footer.php'; ?>
</body>
</html>