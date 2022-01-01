<div class="container my-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card border-0 shadow-lg">
                <img src="" alt="">
                <div class="card-body">
                    <form action="/default/registersave" method="post" class="was-validated">
                        <h3><b>Register</b></h3>
                        <div class="form-group">
                            <input type="text" name="kullanici_adi" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="kullanici_adi_soyadi" class="form-control" placeholder="Name Surname" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="kullanici_mail" class="form-control" placeholder="E-mail" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="kullanici_sifre" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="kullanici_sifre_tekrar" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-outline-dark" type="submit">Register!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>