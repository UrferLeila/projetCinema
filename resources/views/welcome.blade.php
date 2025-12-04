<!doctype html>
<html lang="fr">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @vite('resources/css/stylesAcceuil.css')
</head>

<body>
    @include('partials/header')
    <main>
        @yield('header')
        <h2 class="title-small">Programme du jour</h2>
        <div class="carousel-wrapper image-container">
            <button class="arrow-btn">◀</button>
            <div class="image-container">
                <div class="item">
                    <img src="https://themonitormmc.com/wp-content/uploads/2021/01/twilight.jpg">
                    <div class="info">
                        <h3>02.12.2025</h3>
                        <h3>09h00</h3>
                    </div>
                    <button class="btn reserved">Réservé</button>
                </div>

                <div class="item">
                    <img
                        src="https://2.bp.blogspot.com/-nFIkDeTR2y8/Td5xcLwz1hI/AAAAAAAAAFU/pVi-pZrqsyQ/s1600/Twilight_IllusCompan_CVR_FINAL.jpg">
                    <div class="info">
                        <h3>02.12.2025</h3>
                        <h3>09h00</h3>
                    </div>
                    <button class="btn reserved">Réservé</button>
                </div>

                <div class="item">
                    <img src="https://wallpapers.com/images/hd/jurassic-world-active-volcano-5az4as7ou6azluuj.jpg">
                    <div class="info">
                        <h3>02.12.2025</h3>
                        <h3>09h00</h3>
                    </div>
                    <button class="btn reserved">Réservé</button>
                </div>

                <div class="item">
                    <img
                        src="https://tse3.mm.bing.net/th/id/OIP.9nucBRZfBWPZoPAhI2wVrAHaJ4?rs=1&pid=ImgDetMain&o=7&rm=3">
                    <div class="info">
                        <h3>02.12.2025</h3>
                        <h3>09h00</h3>
                    </div>
                    <button class="btn reserved">Réservé</button>
                </div>

                <div class="item">
                    <img src="https://fr.web.img5.acsta.net/pictures/14/08/04/15/09/405662.jpg">
                    <div class="info">
                        <h3>02.12.2025</h3>
                        <h3>09h00</h3>
                    </div>
                    <button class="btn reserved">Réservé</button>
                </div>
            </div>
            <button class="arrow-btn">▶</button>
        </div>
    </main>
</body>

</html>