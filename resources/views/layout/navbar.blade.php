<nav class="navbar  navbar-expand-lg navbar-light bg-primary shadow mb-4">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1 text-warning">
            <i class="fas fa-lightbulb bg"></i>
            {{ env('APP_NAME') }}
        </span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#homeNavbar" aria-controls="homeNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="homeNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light @if(!isset($active)) text-dark @endif" aria-current="page" href="{{ route('home') }}">Inicio</a>
                </li>
                @if(Auth::user())
                <li class="nav-item">
                    <a class="nav-link text-light @if(isset($active) && $active == 'projects') text-dark @endif" aria-current="page" href="{{ route('projects.index') }}">Projetos</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link text-light @if(isset($active) && $active == 'contacts') text-dark @endif" aria-current="page" href="{{ route('contacts') }}">Contato</a>
                </li>
            </ul>
        </div>
        @if(Auth::user())
        <div class="btn-group dropstart">
            <button class="btn btn-primary dropdown-toggle" type="button" id="userDropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
            </button>
            <ul class="dropdown-menu" aria-labelledby="userDropdownMenu">
                <li><a class="dropdown-item" href="#">Configurações</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-light" type="submit">Sair</button>
                    </form>
                </li>
            </ul>
        </div>
        @endif
    </div>
</nav>