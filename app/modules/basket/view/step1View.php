<div class="container my-5">

    <div class="row">

        <div class="col-md-8">

            <h3><b>Sepetteki Ürünler</b></h3>
            <div class="clearfix"></div><hr>


            <?php $totalRate = 0; foreach ($data['products'] as $product): ?>

                <div class="row">

                    <div class="col-md-2">
                        <img src="/images/product/<?=$product['urun_resmi']?>" class="img-fluid">
                    </div>
                    <div class="col-md-7">
                        <?=$product['urun_adi']?><br>
                        <?=$product['renk_adi']." ".$product['beden_adi']?>
                    </div>
                    <div class="col-md-3 text-right">
                        <h5><b><?=$product['urun_fiyat']?> ₺ x <?=$product['urun_adet']?> </b></h5>
                    </div>

                </div>

                <div class="clearfix"></div><hr>

            <?php $totalRate += $product['urun_fiyat'] * $product['urun_adet']; endforeach; ?>


        </div>

        <div class="col-md-4">

            <div class="card border-0 shadow-lg">
                <div class="card-body text-center">
                    <span class="text-success"><b>1.Ürün Ekranı<b></span>
                    <div class="clearfix"></div><hr>
                    <span>2.Adres Ekranı</span>
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

    <a href="/basket/step2" class="btn btn-outline-dark float-right">İleri</a>
    <div class="clearfix"></div>

</div>