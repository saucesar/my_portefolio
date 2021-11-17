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
                    <a class="nav-link text-light" aria-current="page" href="#">Projetos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>