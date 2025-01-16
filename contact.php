<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $secret = '6Lf746MqAAAAAOww_GMS_GiWDBRuMa3pvyFyNvcM';
    $token = $_POST['recaptcha_token']; 
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, [
        'secret' => $secret,
        'response' => $token
    ]);
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $response = curl_exec($ch);
    
    if (curl_errno($ch)) {
        echo "Erreur cURL: " . curl_error($ch);
    }
    
    curl_close($ch);
    
    $responseKeys = json_decode($response, true);
    
    if (intval($responseKeys["success"]) !== 1) {
        $message = "Échec de la vérification reCAPTCHA. Essayez à nouveau.";
    } else {
        $message = "reCAPTCHA validé ! Formulaire soumis.";
    }
  echo $message;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
        <?php
        $pageTitle = "Bytemeuh - Actualités et Conseils Automobile, Voiture";
        $pageDescription = "Contactez Bytemeuh pour toutes vos questions concernant les voitures, conseils d'achat, entretien et réparations. Nous sommes là pour vous aider.";
        include 'head.php';
    ?>
   <script src="https://www.google.com/recaptcha/api.js?render=6Lf746MqAAAAAGO621PTXccH4SDENTquPUG1kBs1" defer></script>
    
    <!-- JSON-LD pour SEO -->
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "mainEntity": {
    "@type": "Organization",
    "name": "Bytemeuh",
    "url": "https://www.bytemeuh.com",
    "logo": "https://bytemeuh-bytemeuh.fr/assets/images/logo.webp",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+33-1-2345-6789",
      "contactType": "Customer Support",
      "areaServed": "FR",
      "availableLanguage": "French",
      "email": "contact@bytemeuh-bytemeuh.fr"
    },
    "address": [
	   {
        "@type": "PostalAddress",
        "streetAddress": "21 Rue Erard",
        "addressLocality": "Paris",
        "postalCode": "75012",
        "addressCountry": "FR"
      },
      {
        "@type": "PostalAddress",
        "streetAddress": "242 Rue du Faubourg Saint-Antoine",
        "addressLocality": "Paris",
        "postalCode": "75012",
        "addressCountry": "FR"
      }
    ],
    "sameAs": [
      "https://www.facebook.com/bytemeuh",
      "https://www.twitter.com/bytemeuh",
      "https://www.instagram.com/bytemeuh",
      "https://www.linkedin.com/company/bytemeuh",
      "https://www.youtube.com/@bytemeuh-bytemeuh"
    ]
  }
}
</script>
</head>
<body itemscope itemtype="http://schema.org/WebPage">
<header itemscope itemtype="http://schema.org/WPHeader">
    <h1 itemprop="name">Contactez-nous</h1>
    <p>Nous sommes là pour répondre à vos questions concernant l'automobile.</p>
    <?php include 'navbar.php'; ?>
</header>

<main itemscope itemtype="http://schema.org/Service">
    <section>
        <h2 itemprop="serviceType">Formulaire de contact</h2>
        <p>Pour toute demande d'information, n'hésitez pas à remplir le formulaire ci-dessous :</p>
        <form id="contactForm" action="contact.php" method="POST">
            <label for="name">Votre nom :</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Votre email :</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="message">Votre message :</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <br>
			<input type="hidden" name="recaptcha_token" id="recaptcha_token">
            <button type="submit">Envoyer</button>
        </form>
    </section>

    <section>
        <h2>Informations de contact</h2>
        <p>Vous pouvez également nous contacter par les moyens suivants :</p>
	  	<ul>
		  <li>Email : <a href="mailto:contact@bytemeuh-bytemeuh.fr" itemprop="email">contact@bytemeuh-bytemeuh.fr</a></li>
		  <li>Téléphone : <a href="tel:+33123456789" itemprop="telephone">+33 1 23 45 67 89</a></li>
		  <li>Adresse 1 : <span itemprop="address">21 Rue Erard, 75012 Paris</span></li>
		  <li>Adresse 2 : <span itemprop="address">242 Rue du Faubourg Saint-Antoine, 75012 Paris</span></li>
		</ul>

    </section>

    <section>
        <h2>Suivez-nous sur les réseaux sociaux</h2>
        <p>Restez connecté avec nous :</p>
        <ul>
            <li><a href="https://twitter.com/bytemeuh" target="_blank">Twitter</a></li>
            <li><a href="https://facebook.com/bytemeuh" target="_blank">Facebook</a></li>
            <li><a href="https://instagram.com/bytemeuh" target="_blank">Instagram</a></li>
            <li><a href="https://www.linkedin.com/company/bytemeuh" target="_blank">Linkedin</a></li>
            <li><a href="https://www.youtube.com/@bytemeuh-bytemeuh" target="_blank">Youtube</a></li>
        </ul>
    </section>
</main>

<?php include 'footer.php'; ?>
  
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            grecaptcha.ready(function() {
                grecaptcha.execute('6Lf746MqAAAAAGO621PTXccH4SDENTquPUG1kBs1', { action: 'submit' }).then(function(token) {
                    document.getElementById('recaptcha_token').value = token;
                    document.getElementById('contactForm').submit();
                });
            });
        });
    </script>
  
</body>
</html>
