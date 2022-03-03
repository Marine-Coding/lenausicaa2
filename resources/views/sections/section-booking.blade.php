<!-- Création du texte-aacueil et formulaire Booking -->

<div class="container section-booking">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="texte-accueil text-center">
            <h1>Make your reservation</h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi
                facere, soluta magnam consectetur molestias itaque ad sint
                fugit architecto incidunt iste culpa perspiciatis possimus
                voluptates aliquid consequuntur cumque quasi. Perspiciatis.
              </p>
              <button class="bouton-accueil text-white btn btn-outline-light">Découvrir maintenant !</button>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="formulaire-booking">
                <form>
                  <div class="form-group text-center mb-3 fw-bold" style="color: #00145B">
                    <span class="form-label">Votre destination : Le Nausicaa 2</span>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 mb-3">
                      <input type="text" class="form-control" placeholder="NOM" aria-label="NOM" name="nom" required>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" placeholder="Prénom" aria-label="Prénom" name="prenom" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <input type="text" class="form-control" placeholder="Téléphone" aria-label="Téléphone" name="telephone" required>
                    </div>
                    <div class="col-sm-6">
                      <input type="email" class="form-control" placeholder="Adresse email" aria-label="Adresse email" name="email" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <span class="form-label">Date d'entrée</span>
                        <input class="form-control" type="date" required />
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <span class="form-label">Date de sortie</span>
                        <input class="form-control" type="date" required />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <span class="form-label">Personnes</span>
                        <select class="form-control">
                          <option>1</option>
                          <option>2</option>
                        </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-btn text-center">
                    <button type="button" class="submit-btn btn text-white" style="background-color: #00145B">Voir les disponibilités</button>
                  </div>
                </form>
              </div>
        </div>
    </div>
</div>
<!-- Fin de texte-aacueil et formulaire Booking -->
</section>
    <!-- Fin de la section contenant "top-navbar", "item-meunu" et "formulaire-booking" -->