
    <h3>Ürün Yönetimi</h3>
    <a href="/panel/product">Ürün Listesine Geri Dön</a>
    <div class="clearfix"></div><hr>
    <div class="row">

        <div class="col-md-4">
            <div class="row">
                <?php $i=1; foreach ($data['resim'] as $resim): ?>
                    <?php if($i==1): ?>
                        <div class="col-md-12 mb-3">
                            <img src="/images/product/<?=$resim['resim_adi']?>" alt="" class="img-fluid">
                        </div>
                    <?php else: ?>
                        <div class="col-md-4 mb-3">
                            <img src="/images/product/<?=$resim['resim_adi']?>" alt="" class="img-fluid">
                        </div>
                    <?php endif; ?>
                <?php $i++; endforeach; ?>

                <form action="/panel/addproductimage/<?=$data['urun']['urun_id']?>" enctype="multipart/form-data" method="post" multiple>
                    <div class="col-md-12 mb-3">
                        <input name="urun_resim[]" type="file" class="form-control" multiple required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary float-right">Yükle</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <form action="/panel/updateproduct/<?=$data['urun']['urun_id']?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <input name="urun_adi" type="text" class="form-control" placeholder="Ürün Adı" value="<?=$data['urun']['urun_adi']?>">
                    </div>

                    <div class="col-md-4 mb-3">
                        <input name="urun_fiyat" type="text" class="form-control" placeholder="Ürün Fiyat" value="<?=$data['urun']['urun_fiyat']?>">
                    </div>

                    <div class="col-md-4 mb-3">
                        <select name="urun_kategori" class="form-control">
                            <?php foreach ($data['kategori'] as $kategori): ?>
                                <option value="<?=$kategori['kategori_id']?>" <?=($data['urun']['urun_kategori']==$kategori['kategori_id'] ? "selected":"")?>><?=$kategori['kategori_adi']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-md-12 mb-3">
                        <textarea name="urun_aciklama" rows="4" class="form-control" placeholder="Ürün Açıklama"><?=$data['urun']['urun_aciklama']?></textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary float-right">Kaydet</button>
                    </div>
                </div>
            </form>

            <form action="/panel/addfeatures/<?=$data['urun']['urun_id']?>" method="post">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <select name="urun_renk" class="form-control">
                            <?php foreach ($data['renk'] as $renk): ?>
                                <option value="<?=$renk['renk_id']?>"><?=$renk['renk_adi']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <select name="urun_beden" class="form-control">
                            <?php foreach ($data['beden'] as $beden): ?>
                                <option value="<?=$beden['beden_id']?>"><?=$beden['beden_adi']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <input name="urun_stok" type="text" class="form-control" placeholder="Ürün Stok">
                    </div>

                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary float-right">Kaydet</button>
                    </div>
                </div>
            </form>

            <div class="row">
                <div class="col-md-4"><b>Ürün Renk</b></div>
                <div class="col-md-4"><b>Ürün Beden</b></div>
                <div class="col-md-4"><b>Ürün Stok</b></div>
            </div>
            <?php foreach ($data['ozellik'] as $ozellik): ?>
                <div class="row">
                    <div class="col-md-4"><?=$ozellik['renk_adi']?></div>
                    <div class="col-md-4"><?=$ozellik['beden_adi']?></div>
                    <div class="col-md-4"><?=$ozellik['stok_adedi']?></div>
                </div>
            <?php endforeach; ?>
            
        </div>

    </div>
