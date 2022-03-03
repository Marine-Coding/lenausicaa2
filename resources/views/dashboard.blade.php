@extends('layouts.admin')
@section('main')
    
      <div class="dropdown">
        <a class="btn text-white dropdown-toggle" href="#" style="background-color: #00145B;" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-lock me-2"></i>Options mot de passe
        </a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="../admin_connect/reset-password.php">Réinitialiser votre mot de passe</a></li>
          <li><a class="dropdown-item" href="../admin_connect/logout.php">Déconnexion</a></li>
        </ul>
      </div>
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-lg-4 align-self-center">
              <div class="text-center">
                <h1 class="home-text">Bienvenue sur votre espace admin !</h1>
              </div>
            </div>
            <div class="col-lg-8 align-self-center">
              <img
                src="../image/img_dashboard.jpg"
                alt=""
                width="600"
                height="550"
              />
            </div>
          </div>
        </div>
@endsection