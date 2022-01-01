<div class="container" my-5>
    
    <div class="row">
        
        <div class="col-md-4">
            <div class="card border-0 shadow-lg">
                <img src="/images/product/<?=$data['product']['urun_resmi'] ?>" class="img-fluid" alt="">
            </div>

        </div>
        <div class="col-md-8">
            <h2><b><?=$data['product']['urun_adi'] ?></b></h2>
            <div class="clearfix"></div><hr>

            <p><?=$data['product']['urun_aciklama'] ?></p>
            <div class="clearfix"></div><hr>

            <h4 class="float-left"><b><?=$data['product']['urun_fiyat'] ?></b></h4>
            <button class="btn btn-outline-dark float-right">Shoppingbag</button>
        </div>
        
    </div>
    
</div>