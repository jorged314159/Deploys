<!DOCTYPE html>
<html>
<head>
    <title>Mi Blog</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Mi Blog</h1>
            <img class="profile-image" src="{{ asset('images/my-photo.jpg') }}" alt="Mi imagen">
        </header>

        <section class="profile-section">
            <h2>Acerca de mí</h2>
            <div class="text-container">
                <p>Hola, me llamo Jorge Luis Diaz. Actualmente tengo 27 años, casi 28, y estudio la carrera de Ingeniería de Software.</p>
                <p>Este blog es para contar un poco sobre mí en un futuro y para poner en práctica lo que aprendí en la clase de Deployment</p>
                <p>que es basicamente a hacer deploys de aplicaciones.</p>
                <br>
                <p>No olvides seguirme en mis redes que dejo en la parte de abajo :D</p>
            </div>
        </section>

        <footer class="footer">
            <div class="social-icons">
                <a href="https://www.facebook.com/yorch.rikudo31416" target="_blank"><img src="{{ asset('images/facebook.png') }}" alt="Facebook"></a>
                <a href="https://www.instagram.com/___yorch___/" target="_blank"><img src="{{ asset('images/instagram.png') }}" alt="Instagram"></a>
                <a href="https://www.hoyolab.com/accountCenter/postList?id=105614155" target="_blank"><img src="{{ asset('images/hoyolab.webp') }}" alt="HoyoLab"></a>
                <a href="https://www.tiktok.com/@dilucmain7u7" target="_blank"><img src="{{ asset('images/tik-tok.png') }}" alt="TikTok"></a>
            </div>
            <p>Derechos de autor &copy; {{ date('Y') }}</p>
        </footer>
    </div>
</body>
</html>
