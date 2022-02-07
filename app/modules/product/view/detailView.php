<div class="container my-5">

    <div class="row">

        <div class="col-md-4">
            <div class="card border-0 shadow-lg owl-carousel">
                <?php foreach ($data['image'] as $resim): ?>
                    <img src="/images/product/<?=$resim['resim_adi']?>" class="img-fluid">
                <?php endforeach; ?>
            </div>
        </div>

        <div class="col-md-5">

            <div class="row">
                <div class="col-12">
                    <h2><b><?=$data['product']['urun_adi']?></b></h2>
                    <div class="clearfix"></div><hr>

                    <p><?=$data['product']['urun_aciklama']?></p>
                    <div class="clearfix"></div><hr>

                    <h4 class="float-left"><b><?=$data['product']['urun_fiyat']?> ₺</b></h4>
                </div>
            </div>


            <?php if(isset($_SESSION['kullanici'])): ?>
                <form action="/basket/addproduct/<?=$data['product']['urun_id']?>" method="post">

                    <div class="row mb-3">
                        <?php foreach ($data['color'] as $renk): ?>
                            <div class="col-md-2 pr-0 text-center mb-2">
                                <div class="py-3 px-2 shadow rounded" style="background-color: #<?=$renk['renk_kodu']?>">
                                    <input name="urun_renk" id="renk<?=$renk['renk_id']?>" value="<?=$renk['renk_id']?>" type="radio" onclick="ajaxPost('/product/feature', 'uid=<?=$renk["urun_id"]?>&rid=<?=$renk["renk_id"]?>', 'renk')">
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <div class="col-12">
                            <div id="renk"></div>
                        </div>
                    </div>

                    <!--<?php foreach ($data['features'] as $ozellik): ?>
                        <div class="row mb-3">
                            <div class="col-md-4"><?=$ozellik['renk_adi']?></div>
                            <div class="col-md-4"><?=$ozellik['beden_adi']?></div>
                            <div class="col-md-4"><?=$ozellik['stok_adedi']?></div>
                        </div>
                    <?php endforeach; ?>-->

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-dark float-right">Ürünü Sepete At</button>
                        </div>
                    </div>

                </form>
            <?php endif; ?>
        </div>

    </div>

</div>

<script>

    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:1,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true
    });

</script>