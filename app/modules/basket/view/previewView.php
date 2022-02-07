<div class="container my-5">

    <form action="/basket/step3" method="post">

        <div class="row">

            <div class="col-md-8 offset-md-2">

                <div class="card border-0 shadow-lg">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-4"><b>Sipariş Sahibi</b></div>
                            <div class="col-md-4"><b>Sipariş Toplamı</b></div>
                            <div class="col-md-4"><b>Sipariş Tarihi</b></div>
                        </div>

                        <div class="row">
                            <div class="col-md-4"><?=$data['siparis']['kullanici_adi_soyadi']?></div>
                            <div class="col-md-4"><?=number_format($data['siparis']['siparis_toplam'],"2", ",",".")." ₺"?></div>
                            <div class="col-md-4"><?=$data['siparis']['siparis_tarih']?></div>
                        </div>

                        <div class="clearfix"></div><hr>

                        <div class="row">
                            <div class="col-md-6"><b>Fatura Adresi</b></div>
                            <div class="col-md-6"><b>Teslimat Adresi</b></div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <?=$data['fatura']['adres']."".$data['fatura']['adres_ilce']." ".$data['fatura']['adres_id']." ".$data['fatura']['adres_postakodu']?>
                            </div>
                            <div class="col-md-6">
                                <?=$data['teslimat']['adres']." ".$data['teslimat']['adres_ilce']." ".$data['teslimat']['adres_id']." ".$data['teslimat']['adres_postakodu']?>
                            </div>
                        </div>

                        <div class="clearfix"></div><hr>

                        <h6><b>Ürün Listesi</b></h6>

                        <div class="row mb-3">
                            <div class="col-md-2">
                                <b>Ürün Resmi</b>
                            </div>
                            <div class="col-md-4"><b>Ürün Adı</b></div>
                            <div class="col-md-2"><b>Ürün Adet</b></div>
                            <div class="col-md-2"><b>Ürün Fiyat</b></div>
                            <div class="col-md-2"><b>Ürün Toplam</b></div>
                        </div>

                        <?php foreach($data['detay'] as $detay): ?>
                        <div class="row mb-3">
                            <div class="col-md-2">
                                <img src="/images/product/<?=$detay['urun_resmi']?>" class="img-fluid">
                            </div>
                            <div class="col-md-4"><?=$detay['urun_adi']?><br><?=$detay['renk_adi']." ".$detay['beden_adi']?></div>
                            <div class="col-md-2"><?=$detay['urun_adet']?></div>
                            <div class="col-md-2"><?=number_format($detay['urun_fiyat'],"2", ",",".")." ₺"?></div>
                            <div class="col-md-2"><?=number_format($detay['urun_fiyat']*$detay['urun_adet'], "2", ",", ".")." ₺"?></div>
                        </div>
                        <?php endforeach; ?>

                    </div>
                </div>

            </div>

        </div>

    </form>

</div>