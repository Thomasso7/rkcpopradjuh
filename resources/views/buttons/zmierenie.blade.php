<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<nav class="navbar">
    <div class="navbar-container">
        <a href="{{url('/')}}" class="navbar-logo"><img src="{{asset('Subory/logo-farnost-poprad-juh-biele.png')}}"></a>
        <button class="navbar-toggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
        <ul class="navbar-menu">
            <li><a href="{{url('/')}}">Domov</a></li>
            <li><a href="{{url('kancelaria')}}">Kancelária</a></li>
            <li><a href="{{url('oznamy2')}}">Archív oznamov</a></li>
            <div class="dropdown">
                <button class="dropbtn">Sviatosti</button>
                <div class="dropdown-content">
                    <a href="{{url('krst')}}">Krst</a>
                    <a href="{{url('zmierenie')}}">Sviatosť zmierenia</a>
                    <a href="{{url('manzelstvo')}}">Sviatosť manželstva</a>
                    <a href="{{url('pohreb')}}">Kresťanský pohreb</a>
                    <a href="{{url('prijimanie')}}">Prvé sväté prijímanie</a>
                    <a href="{{url('pomazanie')}}">Pomazanie chorých</a>
                    <a href="{{url('sviatosti')}}">Iniciačné sviatosti dospelých</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Farnosť</button>
                <div class="dropdown-content">
                    <a href="{{url('farnost')}}">O farnosti</a>
                    <a href="{{url('knazi')}}">Kňazi vo farnosti</a>
                </div>
            </div>
            <li><a href="{{url('kontakt')}}">Kontakt</a></li>
        </ul>
    </div>
</nav>

<div class="table-container">
    <h2 class="table-heading">Pravidelné spovedanie</h2>
    <h3 class="vynimka"></h3>
    <table>
        <thead>
        </thead>
        <tbody>
        <tr>
            <td><b>Pondelok</b></td>
            <td>6:15 - 6:40</td>
            <td></td>
            <td>17:30 - 18:15</td>
        </tr>
        <tr>
            <td><b>Utorok</b></td>
            <td>6:15 - 6:40</td>
            <td>11:30 - 11:55</td>
            <td>17:30 - 18:15</td>
        </tr>
        <tr>
            <td><b>Streda</b></td>
            <td>6:15 - 6:40</td>
            <td>15:30 - 15:55</td>
            <td>17:30 - 18:15</td>
        </tr>
        <tr>
            <td><b>Štvrtok</b></td>
            <td>6:15 - 6:40</td>
            <td>11:30 - 11:55</td>
            <td>17:30 - 18:15</td>
            <td>19:15 - 20:00</td>
        </tr>
        <tr>
            <td><b>Piatok</b></td>
            <td>6:15 - 6:40</td>
            <td>15:30 - 15:55</td>
            <td>17:30 - 18:15</td>
        </tr>
        <tr>
            <td><b>Sobota</b></td>
            <td>6:30 - 6:55</td>
            <td></td>
            <td>16:30 - 16:55</td>
        </tr>
        </tbody>
    </table>
</div>

<section class="footer">
    <div class="social">
        <a href="{{url('https://www.instagram.com/rkc_popradjuh/')}}"><i class="fab fa-instagram"></i></a>
        <a href="{{url('https://www.facebook.com/rkcpopradjuh/?locale=sk_SK')}}"><i class="fab fa-facebook-f"></i></a>
    </div>
    <p class="copyright">
        &copy; 2026 Rímskokatolícka farnosť Poprad juh
    </p>
</section>
<script>
    const navbarToggle = document.querySelector('.navbar-toggle');
    const navbarMenu = document.querySelector('.navbar-menu');

    navbarToggle.addEventListener('click', () => {
        navbarToggle.classList.toggle('active');
        navbarMenu.classList.toggle('active');
    });

</script>
</body>
</html>
