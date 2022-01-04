<div class="container my-5">

    <div class="row">

        <div class="col-md-8">
            <h3>Product on basket</h3>
            <div class="clearfix"></div><hr>

            <?php $totalRate = 0; foreach ($data['products'] as $product):  ?>

            <div class="row">
                    <div class="col-md-2">
                        <img src="/images/product/<?=$product['urun_resmi']?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-7">
                        <?=$product['urun_adi']?>
                    </div>
                    <div class="col-md-3 text-right">
                        <h5><b><?=$product['urun_fiyat']?> kr x <?=$product['urun_adet']?> </b></h5>
                    </div>
            </div>
            <div class="clearfix"></div><hr>
            <?php $totalRate += $product['urun_fiyat'] * $product['urun_adet']; endforeach; ?>
        </div>


        <div class="col-md-4">

            <div class="card border-0 shadow-lg">
                <div class="card-body text-center">
                    <h4>Aktive</h4>
                    <div class="clearfix"></div><hr>
                    <span>Adress List</span>
                    <div class="clearfix"></div><hr>
                    <span>Betala </span>

                    <small class="float-left"><b>Total product</b></small>
                    <small class="float-right"><b><?=$data['totalProduct']?></b></small>
                    <div class="clearfix"></div><hr>

                    <small class="float-left">Total price</small>
                    <small class="float-right"><b><?=number_format($data['totalRate'], 2, "," , ".")?></b></small>
                    <div class="clearfix"></div><hr>


                </div>
            </div>
        </div>
    </div>
    <a href="/basket/step2" class="btn-outline-dark float-right">Next</a>
    <div class="clearfix"></div><hr>
</div>