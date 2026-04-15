<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pan Tadeusz - Edycja w Ramce</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lora:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-green: #2d5a27;
            --gold: #d4af37;
            --bg-paper: #f4f1ea;
        }

        body {
            font-family: 'Lora', serif;
            background-color: var(--bg-paper);
            color: #2c3e50;
        }

        .hero {
            width: 100%;
            height: 180px;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                        url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=2000&auto=format&fit=crop') center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .navbar-custom {
            background-color: var(--primary-green);
            border-bottom: 4px solid var(--gold);
        }

        /* --- STYLIZACJA RAMKI --- */
        .book-frame {
            border: 3px double var(--primary-green); /* Podwójna linia - styl klasyczny */
            padding: 40px;
            background: white;
            position: relative;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }

        /* Dodatkowe ozdobne narożniki w ramce */
        .book-frame::before {
            content: "❦";
            position: absolute;
            top: 5px;
            left: 5px;
            color: var(--gold);
            font-size: 1.2rem;
        }

        .drop-cap {
            float: left;
            font-family: 'Playfair Display', serif;
            font-size: 5rem;
            line-height: 0.7;
            margin-top: 0.1em;
            margin-right: 15px;
            color: var(--primary-green);
            text-shadow: 1px 1px 0px var(--gold);
        }

        .poem-text {
            font-size: 1.25rem;
            line-height: 1.8;
            text-align: left;
        }

        .image-aside img {
            border: 5px solid white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            max-width: 100%;
        }

        .footer-custom {
            padding: 30px 0;
            margin-top: 40px;
            border-top: 1px solid #ddd;
            font-size: 0.9rem;
            opacity: 0.8;
        }
    </style>
</head>
<body>

    <header class="hero text-center">
        <h1 class="display-5 fw-bold" style="font-family: 'Playfair Display';">Pan Tadeusz, czyli ostatni zajazd na Litwie: historia szlachecka z roku 1811 i 1812 we dwunastu księgach wierszem </h1>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo (!isset($_GET['k'])) ? 'active' : ''; ?>" href="./">Strona Główna</a>
                    </li>
                    <?php
                    for ($k = 1; $k <= 12; $k++) {
                        $active = (isset($_GET['k']) && $_GET['k'] == $k) ? 'active' : '';
                        echo "<li class='nav-item'><a class='nav-link $active' href='?k=$k'>Księga $k</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container-fluid mt-4">
        <div class="row justify-content-start"> <div class="col-lg-8 offset-lg-1"> <div class="book-frame">
                    <article class="poem-text">
                        <?php if (!isset($_GET['k'])): ?>
                            <p>
                                <span class="drop-cap">L</span>itwo! Ojczyzno moja! ty jesteś jak zdrowie.<br>
                                Ile cię trzeba cenić, ten tylko się dowie,<br>
                                Kto cię stracił. Dziś piękność twą w całej ozdobie<br>
                                Widzę i opisuję, bo tęsknię po tobie...
                            </p>
                            <p>
                                Panno święta, co Jasnej bronisz Częstochowy<br>
                                I w Ostrej świecisz Bramie! Ty, co gród zamkowy<br>
                                Nowogródzki ochraniasz z jego wiernym ludem!<br>
                                Jak mnie dziecko do zdrowia powróciłaś cudem...
                            </p>
                            <p>
                                (Gdy od płaczącej matki pod Twoją opiekę<br>
                                Ofiarowany, martwą podniosłem powiekę<br>
                                I zaraz mogłem pieszo do Twych świątyń progu<br>
                                Iść za wrócone życie podziękować Bogu),<br>
                                Tak nas powrócisz cudem na Ojczyzny łono.<br>
                                Tymczasem przenoś moję duszę utęsknioną...
                            </p>
                        <?php else: ?>
                            <?php 
                                $k = intval($_GET['k']);
                                if(file_exists("./k$k.html")) include "./k$k.html"; 
                                else echo "Treść Księgi $k w przygotowaniu.";
                            ?>
                        <?php endif; ?>
                    </article>
                </div>
            </div>

            <div class="col-lg-3 image-aside">
                <div class="sticky-top" style="top: 100px;">
                    <img src="./Tadek.png" alt="Ilustracja" class="img-fluid rounded shadow">
                    <p class="mt-3 small text-center text-muted italic">
                        „Kraj lat dziecinnych! On zawsze zostanie<br>Święty i czysty jak pierwsze kochanie”
                    </p>
                </div>
            </div>

        </div>
    </main>

    <footer class="footer-custom text-center">
        <p>&copy; 2026 - Małgorzata Zgama | ANS w Nowym Targu</p>
    </footer>

    <script src="https://cdn.