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
            <a href="/" class="navbar-logo">
                <img src="{{asset('Subory/logo-farnost-poprad-juh-biele.png')}}">
            </a>
        </div>

        <div class="nav_menu" id="nav-menu">
            <ul class="sidebar">
                <li class="close" onclick=hideSidebar()><a><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                <li><a href="/" class="nav_link">Domov</a></li>
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
                <li class="hideOnMobile"><a href="/" class="nav_link">Domov</a></li>
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
        <br>
        <br>
        <br>
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
