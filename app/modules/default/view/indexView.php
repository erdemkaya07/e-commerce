<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="..." class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container my-5">
    <h2>Product</h2>
    <div class="clearfix"></div><hr>

    <div class="row">

        <?php foreach ($data['products'] as $product):?>

        <a class="col-sm-6 col-md-4 mb5">
            <a href="/product/detail/<?= $product['urun_id']?>" class="text-dark">
                <div class="card border-0 shadow">
                    <img src="/images/product/<?= $product['urun_resmi']?>" alt="" class="img-fluid">
                    <div class="card-body">
                        <h6 class="float-left"><b><?= $product['urun_adi']?></b></h6>
                        <smal class="float-right"><b><?= $product['urun_fiyat']?>kr</b></smal></h4>
                        <div class="clearfix"></div><hr>
                        <span><?= $product['urun_aciklama']?></span>
                    </div>
                </div>
            </a>
        </div>

        <? endforeach; ?>

    </div>
</div>