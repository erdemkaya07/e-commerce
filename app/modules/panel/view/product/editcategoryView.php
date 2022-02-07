<form action="/panel/updatecategory/<?=$data['kategori']['kategori_id']?>" method="post">
    <h3>Kategori Yönetimi</h3>
    <div class="clearfix"></div><hr>
    <div class="row">
        <div class="col-md-4">
            <input name="kategori_adi" type="text" class="form-control" placeholder="Kategori Adı" value="<?=$data['kategori']['kategori_adi']?>">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </div>
    </div>
</form>