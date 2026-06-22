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
            <li><a href='{{url('/')}}'>Domov</a></li>
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
<h2 class="texty">Nová farnosť</h2>
<div class="podtexty">
    <p>
        Farnosť Poprad – Juh vznikla 10. júla 2018 odčlenením z farnosti Poprad, ktorá bola najväčšou farnosťou v Spišskej diecéze. Hranicou medzi týmito dvoma farnosťami je cesta I. triedy I/18, ktorá prechádza celým územím mesta Poprad a oddeľuje sídliská na Juhu od ostatných častí mesta. Rozhodnutie o vzniku novej farnosti je v kompetencii diecézneho biskupa. K farnosti je pričlenená aj filiálka Kvetnica.
        <br>
        <br>
        Centrom farnosti je kostol sv. Cyrila a Metoda, dostavaný v r. 1998, ktorý bol týmto povýšený do hodnosti farského kostola. Môžu sa tu vysluhovať už pravidelne krsty aj sviatosť birmovania, budú sa tu konať prvé sv. prijímania. Tiež niektoré odpustky sa dajú získať iba vo farských kostoloch. Sv. Cyril a Metod sú teda zároveň nebeskými patrónmi farnosti.
        <br>
        <br>
        Dôvodom vzniku novej farnosti je, aby kňazi i aktívni laici boli bližšie k ostatným veriacim, aby takto všetci vytvárali spoločenstvo okolo farského kostola a aby bola zabezpečená lepšia pastoračná služba pre veriacich, čo pomôže k prehĺbeniu náboženského života ľudí, ktorí bývajú na sídliskách na Juhu v Poprade.
    </p>
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
