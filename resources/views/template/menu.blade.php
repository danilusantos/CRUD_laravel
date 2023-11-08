<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="CRUD Teste">
    <div class="container-fluid container-md">
        <a class="navbar-brand" href="{{ route('home') }}" title="CRUD Teste - Página inicial">CRUD Teste</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbar2Label">CRUD Teste</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::getCurrentRoute()->getName() == "home" ? "active" : "" }}" aria-current="page" href="{{ route('home') }}" title="CRUD Teste - Página inicial">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::getCurrentRoute()->getPrefix() == "clientes" ? "active" : "" }}" href="{{ route('clientes.index') }}" title="CRUD Teste - Clintes">Clientes</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
