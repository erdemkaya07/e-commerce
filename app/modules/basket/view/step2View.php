<div class="container my-5">

    <form action="/basket/step3" method="post">

        <div class="row">

            <div class="col-md-8">

                <h3><b>Adresler</b></h3>
                <div class="clearfix"></div><hr>

                  <h6><b>Fatura Adresi</b></h6>
                    <div class="clearfix"></div><hr>

                    <div class="form-group">
                        <select name="fatura_id" class="form-control">
                            <?php foreach ($data['address'] as $address): ?>
                                <option value="<?=$address['adres_id']?>"><?=$address['adres']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <h6><b>Teslimat Adresi</b></h6>
                    <div class="clearfix"></div><hr>


                    <div class="form-group">
                        <select name="teslimat_id" class="form-control">
                            <?php foreach ($data['address'] as $address): ?>
                                <option value="<?=$address['adres_id']?>"><?=$address['adres']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-secondary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                        Yeni Adres Ekle
                    </button>

            </div>

            <div class="col-md-4">

                <div class="card border-0 shadow-lg">
                    <div class="card-body text-center">
                        <span><b>1.Ürün Ekranı<b></span>
                        <div class="clearfix"></div><hr>
                        <span class="text-success">2.Adres Ekranı</span>
                        <div class="clearfix"></div><hr>
                        <span>3.Ödeme Ekranı</span>
                        <div class="clearfix"></div><hr>

                        <small class="float-left"><b>Toplam Ürün Sayısı : </b></small>
                        <small class="float-right"><b><?=$data['totalProduct']?></b></small>
                        <div class="clearfix"></div>

                        <small class="float-left"><b>Toplam Tutar : </b></small>
                        <small class="float-right"><b><?=number_format($data['totalRate'], 2, ",",".")?> ₺</b></small>
                        <div class="clearfix"></div>


                    </div>
                </div>

            </div>

         </div>

    </form>

    <a href="/basket/step1" class="btn btn-outline-dark float-left">Geri</a>
    <button type="submit" class="btn btn-outline-dark float-right">İleri</button>
    <div class="clearfix"></div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Yeni Adres Ekle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/basket/newaddress" method="post" class="was-validated">
                    <div class="form-group">
                        <input type="text" name="adres" class="form-control" placeholder="Adres" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="adres_il" class="form-control" placeholder="İl" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="adres_ilce" class="form-control" placeholder="İlçe" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="adres_postakodu" class="form-control" placeholder="Posta Kodu" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="adres_telefon" class="form-control" placeholder="Telefon" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark float-right">Adresi Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>