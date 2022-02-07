<form action="/panel/addproduct" method="post" enctype="multipart/form-data">
    <h3>Ürün Yönetimi</h3>
    <div class="clearfix"></div><hr>
    <div class="row">
        <div class="col-md-4 mb-3">
            <input name="urun_adi" type="text" class="form-control" placeholder="Ürün Adı">
        </div>

        <div class="col-md-4 mb-3">
            <input name="urun_fiyat" type="text" class="form-control" placeholder="Ürün Fiyat">
        </div>

        <div class="col-md-4 mb-3">
            <select name="urun_kategori" class="form-control">
                <?php foreach ($data['kategori'] as $kategori): ?>
                <option value="<?=$kategori['kategori_id']?>"><?=$kategori['kategori_adi']?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-md-12 mb-3">
            <textarea name="urun_aciklama" rows="4" class="form-control" placeholder="Ürün Açıklama"></textarea>
        </div>

        <div class="col-md-12 mb-3">
            <input name="urun_resim[]" type="file" class="form-control" multiple>
        </div>

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

<div class="clearfix"></div><hr>

<?php foreach ($data['urun'] as $urun): ?>

    <div class="row mb-2">
        <div class="col-md-4"><?=$urun['urun_adi']?></div>
        <div class="col-md-4 text-center"><?=$urun['urun_fiyat']. " ₺"?></div>
        <div class="col-md-4">
            <div class="btn-group float-right" role="group" aria-label="Basic example">
                <a href="/panel/editproduct/<?=$urun['urun_id']?>" class="btn btn-secondary">Düzenle</a>
                <a href="/panel/deleteproduct/<?=$urun['urun_id']?>" class="btn btn-danger">Sil</a>
            </div>
        </div>
    </div>

<?php endforeach; ?>
