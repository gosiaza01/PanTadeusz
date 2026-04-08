<?php
echo = "<h1>Witaj w świecie Pana Tadeusza!</h1>";
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pan Tadeusz - Inwokacja</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lora:ital@0;1&display=swap" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Lora', serif;
            background-color: #f4f1ea; 
            color: #2c3e50;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        .hero {
            width: 100%;
            height: 400px;
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), 
                        url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=2000&auto=format&fit=crop') center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
            margin-bottom: 50px;
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            margin: 0;
            align-items: center;
            justify-content: center;
        }

        nav {
            background: #2d5a27; 
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            max-width: 1000px;
            width: 90%;
            margin-bottom: 50px;
            border-bottom: 4px solid #d4af37; 
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 10px;
        }

        li {
            text-align: center;
        }

        nav a {
            text-decoration: none;
            color: #f4f1ea;
            font-weight: bold;
            font-size: 0.95rem;
            display: block;
            padding: 8px;
            border-radius: 8px;
            transition: all 0.3s ease; 
            border: 1px solid transparent;
        }

        nav a:hover {
            background-color: rgba(212, 175, 55, 0.2); 
            color: #d4af37;
            transform: translateY(-3px); 
            border-color: #d4af37;
        }

        .content {
            max-width: 1100px; 
            width: 90%;
            margin: 0 auto 60px auto;
            background: white;
            padding: 50px;
            box-shadow: 0 0 50px rgba(0,0,0,0.05);
            border-radius: 8px;
            
            display: flex;
            gap: 40px; 
            align-items: flex-start;

    
        .content-wrapper {
            flex: 1; 
            line-height: 1.9;
        }

        .content-wrapper p {
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .image-container {
            flex: 0 0 350px; 
            position: sticky; 
            top: 20px;
        }

        .image-container img {
            width: 100%; 
            height: auto; 
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            border: 3px solid #f4f1ea; 
        }

    
        .drop-cap {
            float: left;
            font-family: 'Playfair Display', serif;
            font-size: 6rem; 
            line-height: 0.8;
            margin-top: 0.15em;
            margin-right: 15px;
            color: #2d5a27;
            font-weight: bold;
            text-shadow: 2px 2px 0px #d4af37;
        }

        .poem-body {
            clear: both;
            padding-top: 10px;
        }

      
        .site-footer {
            width: 100%;
            background: #2c3e50;
            color: #f4f1ea;
            text-align: center;
            padding: 40px 0;
            margin-top: auto;
        }

        .separator {
            font-size: 2rem;
            color: #d4af37;
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #d4af37;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: white;
        }

        .copy {
            margin-top: 20px;
            font-size: 0.8rem;
            opacity: 0.7;
        }

       
        @media (max-width: 800px) {
            .content {
                flex-direction: column;
                padding: 30px;
            }
            .image-container {
                flex: 0 0 auto;
                width: 100%;
                max-width: 400px;
                margin: 0 auto;
                position: static; 
            }
        }
    </style>
</head>
<body id="top">

    <header class="hero">
        <h1>Pan Tadeusz, czyli ostatni zajazd na litwiehistoria pisana we dwunastu księgach wierszem.
        </h1>
    </header>

    <nav>
        <ul>
            <li><a href="./index.html">Strona Główna</a></li>
            <?php
                for ($k = 1; $k <= 12; $k++) {
                        echo '<a href="./k'.$k.'.html" class="list-group-item list-group-item-action">Księga '.$k.'</a';
                    }
                ?>

            <li><a href="./k1.html">Księga I</a></li>
            <li><a href="./k2.html">Księga II</a></li>
            <li><a href="./k3.html">Księga III</a></li>
            <li><a href="./k4.html">Księga IV</a></li>
            <li><a href="./k5.html">Księga V</a></li>
            <li><a href="./k6.html">Księga VI</a></li>
            <li><a href="./k7.html">Księga VII</a></li>
            <li><a href="./k8.html">Księga VIII</a></li>
            <li><a href="./k9.html">Księga IX</a></li>
            <li><a href="./k10.html">Księga X</a></li>
            <li><a href="./k11.html">Księga XI</a></li>
            <li><a href="./k12.html">Księga XII</a></li>
        </ul>
    </nav>

    <main class="content">
        
        <div class="content-wrapper">
            <p>
                <span class="drop-cap">L</span>itwo! Ojczyzno moja! ty jesteś jak zdrowie.<br>
                Ile cię trzeba cenić, ten tylko się dowie,<br>
                Kto cię stracił. Dziś piękność twą w całej ozdobie<br>
                Widzę i opisuję, bo tęsknię po tobie...
            </p>

            <p class="poem-body">
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
        </div>

        <div class="image-container">
            <?php
                if (isset($_GET['k'])){
                    $k = %GET['k'];
                    include_once "./k$k.html";
                    } else { 
                        echo '<img src="./Tadek.png" alt="Pan Tadeusz class="img-fluid mb-4">';'
                    }
                ?/
            <img src="Tadek.png" alt="Ilustracja do Inwokacji - Pan Tadeusz">
        </div>

    </main>

    <footer class="site-footer">
        <div class="separator">❦</div>
        <p><strong>Pan Tadeusz, czyli ostatni zajazd na Litwie</strong></p>
        <p>Adam Mickiewicz | 1834</p>
        <div class="footer-links">
            <a href="#top">Wróć na górę strony</a>
        </div>
        <div class="copy">
            &copy; 2026 - Małgorzata Zgama, Akademia Nauk Stosowanych w Nowym Targu
        </div>
    </footer>

</body>
</html>