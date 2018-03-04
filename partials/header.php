<div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="quoteModalLabel">Demande de renseignements</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="contactForm">
                <div class="modal-body">
                    <div class="mb-3">Vous pouvez me contacter par téléphone au <a href="tel:+33646754283" class="underline"><i class="fas fa-phone"></i><span class="ml-1">0646754283</span></a>, ou en remplissant le formulaire ci-dessous :</div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="name"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Nom" name="name" aria-label="Nom et prénom" aria-describedby="name" minlength="2" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="email-address"><i class="fas fa-at"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Adresse email" name="email" aria-label="Adresse email" aria-describedby="email-address" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="phone"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="tel" class="form-control" placeholder="Téléphone (ex : 0123456789)" name="phone" aria-label="Téléphone" aria-describedby="phone" pattern="[0-9]{10}" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="city"><i class="fas fa-map-marker"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Ville" name="city" aria-label="Ville" aria-describedby="city" minlength="2" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="prestation"><i class="fas fa-briefcase"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Prestation" name="prestation" aria-label="Prestation" aria-describedby="prestation" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="3" minlength="20" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="quoteModalSuccess" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabelSuccess" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="quoteModalLabelSuccess">Demande de renseignements</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">Merci, votre demande de renseignements a bien été envoyée !</div>
        </div>
    </div>
</div>

<div class="modal fade" id="quoteModalError" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabelError" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="quoteModalLabelError">Demande de renseignements</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">Oups, quelque chose ne s'est pas passé comme prévu !<br>Si le problème persiste, vous pouvez également me contacter au <a href="tel:+33646754283">0646754283</a></div>
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
                    <a class="nav-link <?= $active === 'conseils' ? 'active' : '' ?>" href="/conseils.php">Conseils</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
