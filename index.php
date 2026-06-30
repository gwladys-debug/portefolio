<?php
// Déclaration des projets sous forme de tableau associatif PHP
$projets = [
    [
        "titre" => "Noctura (Fè Moun Dòmi)",
        "description" => "Application MVP d'aide au sommeil et à la relaxation articulée autour de 4 piliers : sommeil, relaxation, sport et boissons.",
        "technos" => ["React", "Tailwind CSS", "JavaScript"],
        "github" => "#",
        "demo" => "https://somnia-psi-self.vercel.app/"
    ],
    [
        "titre" => "Space Design",
        "description" => "Site vitrine interactif et sur-mesure conçu pour une entreprise de menuiserie et de rénovation basée en Martinique.",
        "technos" => ["React", "Next.js", "Tailwind CSS"],
        "github" => "#",
        "demo" => "https://space-desing.vercel.app/"
    ],
    [
        "titre" => "Resto Besto",
        "description" => "Système complet de réservation en ligne pour un restaurant avec gestion de la dynamique des tables et de la base de données PHP POO.",
        "technos" => ["PHP POO", "MySQL", "Architecture MVC"],
        "github" => "#",
        "demo" => "#"
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gwladys Gely | Développeuse Web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header class="hero">
        <div class="hero-container">
            <h1>Gwladys <span class="accent">Gely</span></h1>
            <p class="subtitle">Développeuse Web & Web Mobile</p>
            <div class="divider"></div>
            <p class="description">
                Allier la rigueur de la gestion administrative à la créativité du code pour concevoir des solutions numériques intuitives, modernes et performantes.
            </p>

            <div class="social-links">
                <a href="https://www.linkedin.com/in/gwladys-gely-0062a7216/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="#" target="_blank"><i class="fab fa-github"></i></a>

                <a href="mailto:gwladysgely@gmail.com" class="email-link">
                    <i class="fas fa-envelope"></i>
                    <span class="email-text">gwladysgely@gmail.com</span>
                </a>
            </div>

            <a href="#projets" class="btn">Découvrir mes projets</a>
        </div>
    </header>

    <main id="projets" class="portfolio-section">
        <h2 class="section-title">Mes <span class="accent">Réalisations</span></h2>
        <div class="title-divider"></div>

        <div class="projects-grid">
            <?php foreach ($projets as $projet): ?>
                <div class="project-card">
                    <div class="project-content">
                        <h3><?php echo htmlspecialchars($projet['titre']); ?></h3>
                        <p><?php echo htmlspecialchars($projet['description']); ?></p>
                    </div>

                    <div class="project-footer">
                        <div class="technos-tags">
                            <?php foreach ($projet['technos'] as $tech): ?>
                                <span class="tag"><?php echo htmlspecialchars($tech); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="project-links">
                            <a href="<?php echo $projet['github']; ?>" target="_blank"><i class="fas fa-code"></i> Code</a>
                            <a href="<?php echo $projet['demo']; ?>" target="_blank"><i class="fas fa-external-link-alt"></i> Démo</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <footer>
        <p>
            &copy; <?php echo date('Y'); ?> Gwladys Gely &bull; Fait avec passion en Martinique
            <img src="images\images-drapeau.png" alt="Symbole" class="footer-img">
        </p>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>