<div class="row">
    <div class="col-md-8">
        <select name="urun_beden" id="" class="form-control">
            <?php foreach ($data['feature'] as $ozellik): ?>
                <option value="<?=$ozellik['beden_id']?>" <?=($ozellik['stok_adedi'] == 0 ? "disabled" : "")?>><?=$ozellik['beden_adi']?> - <?=$ozellik['stok_adedi']?> adet stokta</option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-md-4">
        <input name="urun_adet" type="number" class="form-control" placeholder="Adet" max="10">
    </div>
</div>