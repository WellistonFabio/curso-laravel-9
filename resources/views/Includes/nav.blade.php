<nav class="banner" style='background-image: url("{{Vite::asset('resources/img/Banner.png')}}")'>
    <div class="navbar">
        <div class="logo"><a href="#">Usuário: </a></div>{{--        {{auth()->user()->name}}--}}
        <div class="nav-menu">
            <ul class="menu">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li><a href="#">Serviços<span class="htmlcss-arrow js-arrow">→</span></a>
                    <ul class="htmlCss-sub-menu submenu">
                        <li class="more">
                                <span>
                                    <a href="#">Businesses →</a>
                                </span>
                            <ul class="more-sub-menu submenu">
                                <li><a href="{{ route('business.index') }}">cadastro</a></li>
                            </ul>
                        </li>
                        <li class="more">
                                <span>
                                    <a href="#">Usuário →</a>
                                </span>
                            <ul class="more-sub-menu submenu">
                                <li><a href="#">Pesquisa</a></li>
                                <li><a href="#">Cadastro</a></li>
                            </ul>
                        </li>
                        <li class="more">
                                <span>
                                    <a href="#">Cliente →</a>
                                </span>
                            <ul class="more-sub-menu submenu">
                                <li><a href="#">Pesquisa</a></li>
                                <li><a href="#">Cadastro</a></li>
                            </ul>
                        </li>
                        <li class="more">
                                <span>
                                    <a href="#">Fornecedor →</a>
                                </span>
                            <ul class="more-sub-menu submenu">
                                <li><a href="#">Pesquisa</a></li>
                                <li><a href="#">Cadastro</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Utilitários</a></li>
            </ul>
        </div>
        <div class="nav-sessao">
            <a href="" class="bootom">Deslogar</a>{{--            {{ route('User.Logout') }}--}}
        </div>
    </div>
</nav>
