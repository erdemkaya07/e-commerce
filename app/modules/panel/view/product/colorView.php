<form action="/panel/addcolor" method="post">
    <h3>Renk Yönetimi</h3>
    <div class="clearfix"></div><hr>
    <div class="row">
        <div class="col-md-4">
            <input name="renk_adi" type="text" class="form-control" placeholder="Renk Adı">
        </div>
        <div class="col-md-4">
            <input name="renk_kodu" type="text" class="form-control" placeholder="Renk Kodu">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Kaydet</button>
        </div>
    </div>
</form>

<div class="clearfix"></div><hr>

<div class="row mb-3">
    <div class="col-md-4"><b>Renk Adı</b></div>
    <div class="col-md-4 text-center"><b>Renk Kodu</b></div>
    <div class="col-md-4"></div>
</div>
<?php foreach($data['renk'] as $renk): ?>
<div class="row mb-2">
    <div class="col-md-4"><?=$renk['renk_adi']?></div>
    <div class="col-md-4 text-center" style="background-color: #<?=$renk['renk_kodu']?>">#<?=$renk['renk_kodu']?></div>
    <div class="col-md-4">
        <div class="btn-group float-right" role="group" aria-label="Basic example">
            <a href="/panel/editcolor/<?=$renk['renk_id']?>" class="btn btn-secondary">Düzenle</a>
            <a href="/panel/deletecolor/<?=$renk['renk_id']?>" class="btn btn-danger">Sil</a>
        </div>
    </div>
</div>
<?php endforeach; ?>
