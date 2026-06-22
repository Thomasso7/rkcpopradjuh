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
<h2 class="texty">Krst</h2>
<h3 class="podtext"> Zahlásenie krstu</h3>
<div class="podtexty">
    <p>
        Krst sú povinní prísť zahlásiť rodičia dieťaťa osobne (aspoň jeden rodič) v kancelárii CENTRA FARNOSTI  v kostole sv. Cyrila a Metoda v Poprade na Juhu. Potrebné je so sebou priniesť rodný list dieťaťa. Zahlásiť sa je možné každý deň v úradných hodinách (viď <a class="kancelaria" href="{{url('kancelaria')}}">Kancelária</a>), najneskôr však do piatku v tom týždni, v ktorom má byť dieťa pokrstené.
        <br>
        <br>
        <b>Krstní rodičia</b>
        <br>
        Krstní rodičia musia byť pokrstení a pobirmovaní katolíci, majú pristupovať k svätému prijímaniu a žiť kresťanským spôsobom života. Ak žije krstný rodič v manželskom zväzku, musí mať cirkevný sobáš.
        <br>
        <br>
        <b>Kedy?</b>
        <br>
        V našej farnosti krstíme vo farskom kostole sv. Cyrila a Metoda v nedeľu po sv. omši, ktorá je o 9:00, teda o 10:15 okrem tretej nedele v mesiaci (18.1.2026, 15.2., 15.3., 19.4., 17.5., 21.6., 19.7., 16.8., 20.9., 18.10., 15.11., 20.12.2026), kedy krstíme vo sv. omši o 9:00.
        <br>
        Rodiča a krstní rodičia sa musia zúčastniť krstnej náuky, ktorá je vždy v sobotu pred krstom o 9:00 v priestoroch Centra farnosti  v kostole sv. Cyrila a Metoda. Ak sú krstní rodičia z inej farnosti a z vážneho dôvodu sa nemôžu zúčastniť náuky, je potrebné priniesť potvrdenie o absolvovaní tejto náuky v inej farnosti. Ak sa náuky nezúčastní jedna strana bez ospravedlnenia, dieťa nebude možné pokrstiť.
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
