<div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="quoteModalLabel">Demande de renseignements</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<header class="fixed-top">
    <nav class="navbar navbar-expand-md navbar-light apscv-navbar">
        <a class="navbar-brand" href="/">
            <img alt="" class="d-inline-block align-top" src="/img/logo.png" width="auto" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="menuCollapse">
            <ul class="navbar-nav navbar-right ml-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= $active === 'accueil' ? 'active' : '' ?>" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $active === 'contact' ? 'active' : '' ?>" href="/contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $active === 'conseils' ? 'active' : '' ?>" href="/conseils.php">Conseils</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
