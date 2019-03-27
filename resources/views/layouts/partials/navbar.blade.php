<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="{{ route('home') }}">
                    <img src="/images/icon/logo.png" alt="CoolAdmin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="active has-sub">
                    <a class="js-arrow" href="{{ route('home') }}">
                        <i class="fas fa-tachometer-alt"></i>Anasayfa</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Evrak İşlemleri</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('add-document') }}">Evrak Ekle</a>
                        </li>
                        <li>
                            <a href="register.html">Tüm Evraklar</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user"></i>Kullanıcı Yönetimi</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('add-document') }}">Kullanıcı Ekle</a>
                        </li>
                        <li>
                            <a href="register.html">Tüm Kullanıcılar</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
