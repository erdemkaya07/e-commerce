<div class="container my-5">

    <form action="/basket/saveorder" method="post">

        <div class="row">

            <div class="col-md-8">

                <div class="card border-0 shadow-lg">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="text" placeholder="Kart Sahibi" class="form-control">
                                </div>

                                <div class="form-group">
                                    <input type="text" placeholder="Kart Numarası" class="form-control">
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <input type="text" placeholder="Ay" class="form-control">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <input type="text" placeholder="Yıl" class="form-control">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <input type="text" placeholder="CV2" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="button" class="btn btn-outline-success">Çekim Yap</button>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <input type="hidden" name="fatura_id" value="<?=$data['fatura_id']?>">
                                <input type="hidden" name="teslimat_id" value="<?=$data['teslimat_id']?>">
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-md-4">

                <div class="card border-0 shadow-lg">
                    <div class="card-body text-center">
                        <span><b>1.Ürün Ekranı<b></span>
                        <div class="clearfix"></div><hr>
                        <span>2.Adres Ekranı</span>
                        <div class="clearfix"></div><hr>
                        <span class="text-success">3.Ödeme Ekranı</span>
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

    <div class="clearfix my-5"></div>

    <a href="/basket/step2" class="btn btn-outline-dark float-left">Geri</a>
    <button type="submit" class="btn btn-outline-dark float-right">Siparişi Kaydet</button>
    <div class="clearfix"></div>

</div>