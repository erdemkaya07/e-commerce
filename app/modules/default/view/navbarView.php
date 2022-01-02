<?php
    $basketModel = new basketModel();
    $totalProduct = $basketModel->getTotalProduct();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
  <div class="container-fluid">
    <a class="navbar-brand" href="/default/index">E-shopping</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-lg-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
          <?php if(isset($_SESSION['kullanici'])): ?>

              <li class="nav-item">
                  <a class="nav-link" href="/basket/step1">Basket (<?=$totalProduct?>)</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <?=$_SESSION['kullanici']['kullanici_adi_soyadi']?>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/default/logout">Log out</a></li>
                  </ul>
              </li>
          <?php else: ?>
              <li class="nav-item">
                  <a class="nav-link" href="/default/register">Register</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/default/login">Login</a>
              </li>
          <?php endif; ?>
      </div>
     </div>
    </div>
</nav>