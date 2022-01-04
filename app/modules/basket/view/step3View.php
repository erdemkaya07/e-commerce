<div class="container my-5">
    <form action="/basket/saveorder" method="post">
        <div class="row">
            <div class="col-md-8">
                <div class="card border-0 shadow-lg">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Kart Name Surname" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Kart Number" class="form-control">
                                </div>
                               <div class="form-row">
                                   <div class="form-group col-md-6">
                                       <input type="text" placeholder="Year/Mounds " class="form-control">
                                   </div>
                                   <div class="form-group col-md-6">
                                       <input type="text" placeholder="CV2" class="form-control">
                                   </div>
                               </div>
                                <div class="form-group">
                                    <button type="btn btn-outline">Ok</button>
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
                            <h4>Aktive</h4>
                            <div class="clearfix"></div><hr>
                            <span>Adress List</span>
                            <div class="clearfix"></div><hr>
                            <span class="text-success">Betala </span>
                            <div class="clearfix"></div><hr>

                            <small class="float-left"><b>Total product</b></small>
                            <small class="float-right"><b><?=$data['totalProduct']?></b></small>
                            <div class="clearfix"></div><hr>

                            <small class="float-left">Total price</small>
                            <small class="float-right"><b><?=number_format($data['totalRate'], 2, "," , ".")?></b></small>
                            <div class="clearfix"></div><hr>
                        </div>
                    </div>
                </div>

    </form>
    <div class="clearfix my-5"></div>
    <a href="/basket/step2" class="btn-outline-dark float-right">Back</a>
    <button type="submit" class="btn-outline-dark float-right">Order save</button>
    <div class="clearfix"></div><hr>
</div>
