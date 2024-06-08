<header class="text-cente">
    <section class="navigation">
        <nav class="navbar-nav navbar-light container-fluid">
            <ul class="d-flex list-style-none justify-content-center mb-0">
                <li class="p-3 {{ ( Route::currentRouteName() == 'pages.home') ? 'active' : '' }}">
                    <a href="{{ route('pages.home') }}">
                        Home
                    </a>
                </li>

                <li class="p-3 {{ ( Route::currentRouteName() == 'guest.eventi.index') ? 'active' : '' }}">
                    <a href="{{ route('guest.eventi.index') }}">
                        Eventi
                    </a>
                </li>

                <li class="p-3 {{ ( Route::currentRouteName() == 'guest.persone.index') ? 'active' : '' }}">
                    <a href="{{ route('guest.persone.index') }}">
                        Persone
                    </a>
                </li>
            </ul>
        </nav>
    </section>
</header>