<form action="/panel/updatesize/<?=$data['beden']['beden_id']?>" method="post">
    <h3>Beden Yönetimi</h3>
    <div class="clearfix"></div><hr>
    <div class="row">
        <div class="col-md-4">
            <input name="beden_adi" type="text" class="form-control" placeholder="Beden Adı" value="<?=$data['beden']['beden_adi']?>">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </div>
    </div>
</form>