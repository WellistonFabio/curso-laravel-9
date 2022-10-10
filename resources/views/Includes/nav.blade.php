<nav class="banner">
    <div class="navbar">
        <div class="logo"><a href="#">Usuário: {{auth()->user()->name}}</a></div>
        <div class="nav-menu">
            <ul class="menu">
                <li>
                    <a href="#">Home</a>
                </li>
                <li><a href="#">Serviços<span class="htmlcss-arrow js-arrow">→</span></a>
                    <ul class="htmlCss-sub-menu submenu">
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
            <a href="{{ route('User.Logout') }}" class="bootom">Deslogar</a>
        </div>
    </div>
</nav>
