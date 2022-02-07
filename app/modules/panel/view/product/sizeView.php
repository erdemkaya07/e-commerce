<form action="/panel/addsize" method="post">
    <h3>Beden Yönetimi</h3>
    <div class="clearfix"></div><hr>
    <div class="row">
        <div class="col-md-4">
            <input name="beden_adi" type="text" class="form-control" placeholder="Beden Adı">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Kaydet</button>
        </div>
    </div>
</form>

<div class="clearfix"></div><hr>

<div class="row mb-3">
    <div class="col-md-2"><b>Beden Adı</b></div>
    <div class="col-md-4"></div>
</div>
<?php foreach($data['beden'] as $beden): ?>
<div class="row mb-2">
    <div class="col-md-2 text-center"><?=$beden['beden_adi']?></div>
    <div class="col-md-4">
        <div class="btn-group float-right" role="group" aria-label="Basic example">
            <a href="/panel/editsize/<?=$beden['beden_id']?>" class="btn btn-secondary">Düzenle</a>
            <a href="/panel/deletesize/<?=$beden['beden_id']?>" class="btn btn-danger">Sil</a>
        </div>
    </div>
</div>
<?php endforeach; ?>
