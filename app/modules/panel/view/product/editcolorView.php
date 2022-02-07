<form action="/panel/updatecolor/<?=$data['renk']['renk_id']?>" method="post">
    <h3>Renk Yönetimi</h3>
    <div class="clearfix"></div><hr>
    <div class="row">
        <div class="col-md-4">
            <input name="renk_adi" type="text" class="form-control" placeholder="Renk Adı" value="<?=$data['renk']['renk_adi']?>">
        </div>
        <div class="col-md-4">
            <input name="renk_kodu" type="text" class="form-control" placeholder="Renk Kodu" value="<?=$data['renk']['renk_kodu']?>">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </div>
    </div>
</form>