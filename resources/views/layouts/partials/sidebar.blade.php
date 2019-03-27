<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="/images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
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
                            <a href="{{ route('documents') }}">Tüm Evraklar</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Evrak Kategori İşlemleri</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('add-document-categories') }}">Evrak Kategorisi Ekle</a>
                        </li>
                        <li>
                            <a href="{{ route('document-categories') }}">Tüm Evrak Kategorileri</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user"></i>Kullanıcı Yönetimi</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('add-user') }}">Kullanıcı Ekle</a>
                        </li>
                        <li>
                            <a href="{{ route('users') }}">Tüm Kullanıcılar</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>