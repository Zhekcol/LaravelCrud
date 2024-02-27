<header>
</header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }} text-white" href="{{ route('home') }}">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link {{ request()->routeIs('cursos.*') ? 'active' : '' }}" aria-current="page" href="{{ route('cursos.index') }}">Cursos</a>
                <a class="nav-link {{ request()->routeIs('contactanos.*') ? 'active' : '' }}" href="{{ route('contactanos.index') }}">Contactanos</a>
                </div>
            </div>
            </div>
    </nav>
<br>