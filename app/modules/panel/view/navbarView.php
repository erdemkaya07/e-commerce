<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="/panel/index">Yönetim Paneli</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ürün Yönetimi
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/panel/product">Ürün Ekle</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/panel/size">Beden Ekle</a>
                        <a class="dropdown-item" href="/panel/category">Kategori Ekle</a>
                        <a class="dropdown-item" href="/panel/color">Renk Ekle</a>
                    </div>
                </li>
                <?php if(isset($_SESSION['admin'])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?=$_SESSION['admin']['admin_kullanici_adi']?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/panel/logout">Çıkış Yap</a>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>