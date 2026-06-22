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
<h2 class="texty">Sviatosť manželstva</h2>
<div class="podtexty">
    <p>
        <b>Muž a žena</b>, ktorí chcú prijať <b>sviatosť manželstva</b>, musia v prvom rade aspoň pol roka dopredu a osobne zahlásiť svoj termín sobáša, a to počas úradných hodín (viď <a href="{{url('kancelaria')}}" class="kancelaria">Kancelária</a>).
        <br>
        <br>
        Potom je treba spísať <b>zápisnicu</b> v dohodnutom čase v kancelárii CENTRA FARNOSTI aspoň <b>tri mesiace</b> pred sobášom.
        <br>
        <br>
        Sobášna zápisnica môže byť spísaná len na základe <b>civilnej žiadosti o uzavretie manželstva</b>, ktorú si snúbenci vybavia na Matričnom úrade v Poprade. K tomu sú potrebné platné občianske preukazy a rodné listy (originály).
        <br>
        <br>
        K sobášnej zápisnici potrebujeme <b>krstné listy</b> snúbencov, ktoré vydávajú farské úrady
        v mieste ich krstu a ktoré ku dňu spísania zápisnice nesmú byť staršie ako tri mesiace. Aby mohlo byť uzavreté sviatostné manželstvo, snúbenci musia byť pokrstení katolíci, pobirmovaní, pristupovať k sv. prijímaniu a žiť kresťanským spôsobom života. V opačnom prípade sa cez našu farnosť vyžaduje povolenie diecézneho biskupa.
        <br>
        <br>
        Snúbenci musia absolvovať <b>prípravu</b> formou, ktorá je uvedená na stránke <a class="kancelaria" href="{{url('https://www.domanzelstva.sk/')}}">www.domanzelstva.sk</a>  – v našej diecéze sú <a class="kancelaria" href="{{url('https://www.domanzelstva.sk/spisska-dieceza')}}">tieto termíny</a> (aj na plagáte dolu) – alebo inú podľa dohody pri zahlásení <b>termínu sobáša</b>.
        <br>
        Tu sú <a class="kancelaria" href="{{url('nauky')}}">termíny večerných náuk pre rok 2026</a> (spolu treba absolvovať 5 tém). Konajú sa spolu aj pre farnosť Poprad – mesto, a to v <b>Pastoračnom centre</b> na Nábreží Jána Pavla II. 438/15 (pod bývalou budovou Katolíckej univerzity) v <b>piatky o 19:30. Je potrebné sa na konkrétnu náuku vopred <a class="kancelaria" href="{{url('https://www.rkcpoprad.sk/snubenecke-nauky/')}}">prihlásiť</a> do štvrtku 12:00!!!</b>
        <br>
        <br>
        V Kostole sv. Cyrila a Metoda v Poprade na Juhu sobášime každú sobotu, okrem adventu a pôstu, v časoch od 13.00h do 16.00h.
    </p>
    <img class="manzelstvo" src="Subory/manzelstvo.jpg">
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
