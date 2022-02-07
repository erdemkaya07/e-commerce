<form action="/panel/addcategory" method="post">
    <h3>Kategori Yönetimi</h3>
    <div class="clearfix"></div><hr>
    <div class="row">
        <div class="col-md-4">
            <input name="kategori_adi" type="text" class="form-control" placeholder="Kategori Adı">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Kaydet</button>
        </div>
    </div>
</form>

<div class="clearfix"></div><hr>

<div class="row mb-3">
    <div class="col-md-2"><b>Kategori Adı</b></div>
    <div class="col-md-4"></div>
</div>
<?php foreach($data['kategori'] as $kategori): ?>
<div class="row mb-2">
    <div class="col-md-2 text-center"><?=$kategori['kategori_adi']?></div>
    <div class="col-md-4">
        <div class="btn-group float-right" role="group" aria-label="Basic example">
            <a href="/panel/editcategory/<?=$kategori['kategori_id']?>" class="btn btn-secondary">Düzenle</a>
            <a href="/panel/deletecategory/<?=$kategori['kategori_id']?>" class="btn btn-danger">Sil</a>
        </div>
    </div>
</div>
<?php endforeach; ?>
