<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/images/slider/slider1.jpg" alt="First slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container my-5">

    <h2><b>Ürün Listesi</b></h2>
    <div class="clearfix"></div><hr>

    <div class="row">

        <?php foreach($data['products'] as $product): ?>

        <div class="col-sm-6 col-md-4 mb-5">

            <a href="/product/detail/<?=$product['urun_id']?>" class="text-dark">
                <div class="card border-0 shadow">
                    <img src="/images/product/<?=$product['resim_adi']?>" class="img-fluid">
                    <div class="card-body">
                        <h6 class="float-left"><b><?=$product['urun_adi']?></b></h6>
                        <h4><small class="float-right"><b><?=$product['urun_fiyat']?> ₺</b></small></h4>
                        <div class="clearfix"></div><hr>
                        <span><?=$product['urun_aciklama']?></span>
                    </div>
                </div>
            </a>

        </div>

        <?php endforeach; ?>


    </div>

</div>