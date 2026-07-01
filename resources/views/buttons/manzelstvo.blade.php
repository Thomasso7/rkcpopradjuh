<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css"
        rel="stylesheet"
    />
    <title>Document</title>
</head>
<body>
<header class="header">
    <nav class="nav container">
        <div class="nav_data">
            <a href="{{url('welcome')}}" class="navbar-logo">
                <img src="{{asset('Subory/logo-farnost-poprad-juh-biele.png')}}">
            </a>
        </div>

        <div class="nav_menu" id="nav-menu">
            <ul class="sidebar">
                <li class="close" onclick=hideSidebar()><a><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                <li><a href="{{url('welcome')}}" class="nav_link">Domov</a></li>
                <li><a href="{{url('kancelaria')}}" class="nav_link">Kancelária</a></li>
                <li><a href="{{url('oznamy2')}}" class="nav_link">Archív oznamov</a></li>
                <li class="dropdown_item">
                    <div onclick=showAndHideDropdown() class="nav_link" id="sviatosti">
                        Sviatosti<i class="ri-arrow-down-s-line dropdown_arrow"></i>
                    </div>
                    <ul class="dropdown_menu">
                        <li>
                            <a href="{{url('krst')}}" class="dropdown_link">Krst</a>
                        </li>
                    </ul>
                    <ul class="dropdown_menu">
                        <li>
                            <a href="{{url('zmierenie')}}" class="dropdown_link">Sviatosť<br> zmierenia</a>
                        </li>
                    </ul>
                    <ul class="dropdown_menu">
                        <li>
                            <a href="{{url('manzelstvo')}}" class="dropdown_link">Sviatosť<br> manželstva</a>
                        </li>
                    </ul>
                    <ul class="dropdown_menu">
                        <li>
                            <a href="{{url('pohreb')}}" class="dropdown_link">Kresťanský<br> pohreb</a>
                        </li>
                    </ul>
                    <ul class="dropdown_menu">
                        <li>
                            <a href="{{url('prijimanie')}}" class="dropdown_link">Prvé sväté<br> priíjímanie</a>
                        </li>
                    </ul>
                    <ul class="dropdown_menu">
                        <li>
                            <a href="{{url('pomazanie')}}" class="dropdown_link">Pomazanie<br> chorých</a>
                        </li>
                    </ul>
                    <ul class="dropdown_menu">
                        <li>
                            <a href="{{url('sviatosti')}}" class="dropdown_link">Sviatosti<br> dospelých</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown_item">
                    <div onclick=showAndHideDropdown() class="nav_link">
                        Farnosť<i class="ri-arrow-down-s-line dropdown_arrow"></i>
                    </div>
                    <ul class="dropdown_menu">
                        <li>
                            <a href="{{url('farnost')}}" class="dropdown_link">O farnosti</a>
                        </li>
                    </ul>
                    <ul class="dropdown_menu">
                        <li>
                            <a href="{{url('knazi')}}" class="dropdown_link">Kňazi <br> vo farnosti</a>
                        </li>
                    </ul>
                </li>
                <li><a href="{{url('kontakt')}}" class="nav_link">Kontakt</a></li>
            </ul>
        </div>
        <div class="nav_menu" id="nav-menu">
            <ul class="nav_list">
                <li class="hideOnMobile"><a href="{{url('welcome')}}" class="nav_link">Domov</a></li>
                <li class="hideOnMobile"><a href="{{url('kancelaria')}}" class="nav_link">Kancelária</a></li>
                <li class="hideOnMobile"><a href="{{url('oznamy2')}}" class="nav_link">Archív oznamov</a></li>
                <li class="dropdown_item hideOnMobile">
                    <div class="nav_link">
                        Sviatosti<i class="ri-arrow-down-s-line dropdown_arrow"></i>
                    </div>
                    <ul class="dropdown_menu">
                        <li>
                            <a href="{{url('krst')}}" class="dropdown_link">Krst</a>
                        </li>
                    </ul>
                    <ul class="dropdown_menu">
                        <li>
                            <a href="{{url('zmierenie')}}" class="dropdown_link">Sviatosť<br> zmierenia</a>
                        </li>
                    </ul>
                    <ul class="dropdown_menu">
                        <li>
                            <a href="{{url('manzelstvo')}}" class="dropdown_link">Sviatosť<br> manželstva</a>
                        </li>
                    </ul>
                    <ul class="dropdown_menu">
                        <li>
                            <a href="{{url('pohreb')}}" class="dropdown_link">Kresťanský<br> pohreb</a>
                        </li>
                    </ul>
                    <ul class="dropdown_menu">
                        <li>
                            <a href="{{url('prijimanie')}}" class="dropdown_link">Prvé sväté<br> priíjímanie</a>
                        </li>
                    </ul>
                    <ul class="dropdown_menu">
                        <li>
                            <a href="{{url('pomazanie')}}" class="dropdown_link">Pomazanie<br> chorých</a>
                        </li>
                    </ul>
                    <ul class="dropdown_menu">
                        <li>
                            <a href="{{url('sviatosti')}}" class="dropdown_link">Sviatosti<br> dospelých</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown_item hideOnMobile">
                    <div class="nav_link">
                        Farnosť<i class="ri-arrow-down-s-line dropdown_arrow"></i>
                    </div>
                    <ul class="dropdown_menu">
                        <li>
                            <a href="{{url('farnost')}}" class="dropdown_link">O farnosti</a>
                        </li>
                    </ul>
                    <ul class="dropdown_menu">
                        <li>
                            <a href="{{url('knazi')}}" class="dropdown_link">Kňazi <br> vo farnosti</a>
                        </li>
                    </ul>
                </li>
                <li class="hideOnMobile"><a href="{{url('kontakt')}}" class="nav_link">Kontakt</a></li>
                <li class="bar1" onclick=showSidebar()><a class="bar1"><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="#e3e3e3"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
            </ul>
        </div>
    </nav>
</header>
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
        Tu sú <a class="kancelaria" href="{{asset('Subory/piatkove-nauky.jpg')}}">termíny večerných náuk pre rok 2026</a> (spolu treba absolvovať 5 tém). Konajú sa spolu aj pre farnosť Poprad – mesto, a to v <b>Pastoračnom centre</b> na Nábreží Jána Pavla II. 438/15 (pod bývalou budovou Katolíckej univerzity) v <b>piatky o 19:30. Je potrebné sa na konkrétnu náuku vopred <a class="kancelaria" href="{{url('https://www.rkcpoprad.sk/snubenecke-nauky/')}}">prihlásiť</a> do štvrtku 12:00!!!</b>
        <br>
        <br>
        V Kostole sv. Cyrila a Metoda v Poprade na Juhu sobášime každú sobotu, okrem adventu a pôstu, v časoch od 13.00h do 16.00h.
    </p>
    <img class="manzelstvo" src="{{asset('Subory/manzelstvo.jpg')}}">
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
    globalThis.click = 0;
    function showSidebar() {
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'flex'
    }

    function hideSidebar() {
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'none'
    }

    function showAndHideDropdown() {
        globalThis.click++;
        const dropdowns = document.querySelectorAll('.dropdown_menu')
        for (let i = 0; i < dropdowns.length; i++) {
            dropdowns[i].style.display = 'block';
        }
        if (globalThis.click === 2) {
            for (let i = 0; i < dropdowns.length; i++) {
                dropdowns[i].style.display = 'none'
                globalThis.click = 0;
            }
        }

    }
    const navbarToggle = document.querySelector('.navbar-toggle');
    const navbarMenu = document.querySelector('.navbar-menu');

    navbarToggle.addEventListener('click', () => {
        navbarToggle.classList.toggle('active');
        navbarMenu.classList.toggle('active');
    });

</script>
</body>
</html>
