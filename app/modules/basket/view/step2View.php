<div class="container my-5">
    <form action="/basket/step3" method="post">
    <div class="row">
        <div class="col-md-8">
            <h3>Adres</h3>
            <div class="clearfix"></div><hr>
                <h6><b>Faktura</b></h6>
                <div class="clearfix"></div><hr>

                <div class="form-group">
                    <select name="fatura_id" class="form-control">
                        <?php foreach ($data['address'] as $address): ?>
                            <option value="<?=$address['adres_id']?>"><?=$address['adres']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <h6><b>Leveransadress</b></h6>
                <div class="clearfix"></div><hr>

                <div class="form-group">
                    <select name="teslimat_id" class="form-control">
                        <?php foreach ($data['address'] as $address): ?>
                            <option value="<?=$address['adres_id']?>"><?=$address['adres']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    New adres
                </button>
        </div>
        <div class="col-md-4">

            <div class="card border-0 shadow-lg">
                <div class="card-body text-center">
                    <h4>Aktive</h4>
                    <div class="clearfix"></div><hr>
                    <span class="clearfix">Adress List</span>
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
    </form>
        <a href="/basket/step1" class="btn-outline-dark float-right">Back</a>
        <button type="submit" class="btn-outline-dark float-right">Next</button>
        <div class="clearfix"></div><hr>
</div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New adress</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/basket/newaddress" method="post" class="was-validated">
                        <div class="form-group">
                            <input type="text" name="adres" class="form-control" placeholder="Adres" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="adres_il" class="form-control" placeholder="Il" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="adres_ilce" class="form-control" placeholder="stad" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="adres_postakodu" class="form-control" placeholder="Postkode" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="adres_telefon" class="form-control" placeholder="Telefonnummert" required>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>