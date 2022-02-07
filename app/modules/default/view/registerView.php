<div class="container my-5">

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card border-0 shadow-lg">
                <img src="https://images.unsplash.com/photo-1511344506912-a2a2d4916354?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=92498ef1b05f6d75d1b6463d70151ff7&auto=format&fit=crop&w=1350&q=80"
                     class="img-fluid" alt="">
                <div class="card-body">

                    <form action="/default/registersave" method="post" class="was-validated">
                        <h2><b>Kayıt Ol</b></h2>
                        <div class="form-group">
                            <input type="text" name="kullanici_adi" class="form-control" placeholder="Kullanıcı Adı" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="kullanici_adi_soyadi" class="form-control" placeholder="Ad Soyad" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="kullanici_mail" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="kullanici_sifre" class="form-control" placeholder="Şifre" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="kullanici_sifre_tekrar" class="form-control" placeholder="Şifre Tekrar" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-outline-dark" type="submit">Kayıt Ol</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>